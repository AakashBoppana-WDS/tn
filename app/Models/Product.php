<?php
namespace App\Models;

use App\Core\Model;

class Product extends Model
{
    public function featured(): array { return $this->db->query("SELECT * FROM products WHERE status='active' AND is_featured=1 LIMIT 12")->fetchAll(); }
    public function bestsellers(): array { return $this->db->query("SELECT * FROM products WHERE status='active' ORDER BY sold_count DESC LIMIT 8")->fetchAll(); }
    public function bySlug(string $slug): ?array {
        $st=$this->db->prepare('SELECT * FROM products WHERE slug=? AND status="active" LIMIT 1');$st->execute([$slug]);
        $p=$st->fetch(); return $p?:null;
    }
    public function related(int $categoryId, int $id): array {
        $st=$this->db->prepare('SELECT * FROM products WHERE category_id=? AND id<>? AND status="active" LIMIT 4');$st->execute([$categoryId,$id]);return $st->fetchAll();
    }
}
