<?php
namespace App\Models;

use App\Core\Model;

class Addon extends Model
{
    public function forProduct(int $productId): array {
        $st=$this->db->prepare('SELECT a.* FROM product_addons a JOIN product_addon_map pam ON pam.addon_id=a.id WHERE pam.product_id=? AND a.status=1');
        $st->execute([$productId]);
        return $st->fetchAll();
    }
}
