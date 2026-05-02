<?php

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CheckoutController;

return function($router) {
    $router->get('/', [HomeController::class, 'index']);
    $router->get('/product', [ProductController::class, 'show']);
    $router->get('/checkout', [CheckoutController::class, 'index']);
    $router->post('/api/razorpay/create-order', [CheckoutController::class, 'razorpayCreateOrder']);
    $router->post('/api/razorpay/verify', [CheckoutController::class, 'razorpayVerify']);
};
