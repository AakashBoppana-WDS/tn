<?php
namespace App\Controllers;

use App\Core\Controller;
use App\Core\Database;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(): void
    {
        $cfg = require dirname(__DIR__,2) . '/config/config.php';
        $db = Database::connection($cfg['db']);
        $product = new Product($db);
        $featured = $product->featured();
        $bestsellers = $product->bestsellers();
        $this->view('home/index', compact('featured','bestsellers'));
    }
}
