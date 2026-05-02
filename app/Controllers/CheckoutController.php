<?php
namespace App\Controllers;

use App\Core\Controller;

class CheckoutController extends Controller
{
    public function index(): void { $this->view('checkout/index'); }
    public function razorpayCreateOrder(): void { $this->json(['ok'=>true,'message'=>'Implement Razorpay order create']); }
    public function razorpayVerify(): void { $this->json(['ok'=>true,'message'=>'Implement signature verification']); }
}
