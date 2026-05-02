<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use App\Models\Product;
use App\Models\Addon;

class ProductController extends Controller
{
    public function show(): void
    {
        $cfg = require dirname(__DIR__,2) . '/config/config.php';
        $db = Database::connection($cfg['db']);
        $slug = $_GET['slug'] ?? '';
        $pm = new Product($db);
        $am = new Addon($db);
        $product = $pm->bySlug($slug);
        if (!$product) { http_response_code(404); echo 'Product not found'; return; }
        $addons = $am->forProduct((int)$product['id']);
        $related = $pm->related((int)$product['category_id'], (int)$product['id']);
        $this->view('product/show', compact('product','addons','related'));
    }
}
