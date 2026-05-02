<?php
namespace App\Models;

use App\Core\Model;
use Exception;

class Order extends Model
{
    public function create(array $payload): int
    {
        $this->db->beginTransaction();
        try {
            $st = $this->db->prepare('INSERT INTO orders (user_id, subtotal, addon_total, delivery_charge, discount_amount, total_amount, payment_status, order_status, address_json, delivery_date, delivery_slot_id, razorpay_order_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)');
            $st->execute([$payload['user_id'],$payload['subtotal'],$payload['addon_total'],$payload['delivery_charge'],$payload['discount_amount'],$payload['total_amount'],'paid','placed',json_encode($payload['address']),$payload['delivery_date'],$payload['delivery_slot_id'],$payload['razorpay_order_id']]);
            $orderId=(int)$this->db->lastInsertId();
            foreach($payload['items'] as $it){
                $is=$this->db->prepare('INSERT INTO order_items (order_id, product_id, vendor_id, qty, unit_price, line_total, message_on_cake) VALUES (?,?,?,?,?,?,?)');
                $is->execute([$orderId,$it['product_id'],$it['vendor_id'],$it['qty'],$it['unit_price'],$it['line_total'],$it['message_on_cake']??null]);
                $orderItemId=(int)$this->db->lastInsertId();
                foreach($it['addons'] as $ad){
                    $as=$this->db->prepare('INSERT INTO order_item_addons (order_item_id, addon_id, addon_name, addon_price) VALUES (?,?,?,?)');
                    $as->execute([$orderItemId,$ad['id'],$ad['name'],$ad['price']]);
                }
            }
            $this->db->commit();
            return $orderId;
        } catch (Exception $e) {
            $this->db->rollBack();
            throw $e;
        }
    }
}
