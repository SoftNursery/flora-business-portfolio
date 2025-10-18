<?php
require 'router.php';

route('/', function () {
    include __DIR__ . '/pages/home-page.php';
});

route('/shop', function () {
    include __DIR__ . '/pages/shop-page.php';
});

route('/about', function () {
    include __DIR__ . '/pages/about-page.php';
});

route('/contact', function () {
    include __DIR__ . '/pages/contact-page.php';
});

route('/blog', function () {
    include __DIR__ . '/pages/blog-page.php';
});

route('/cart', function () {
    include __DIR__ . '/pages/cart-page.php';
});

route('/product/{slug}', function () {
    include __DIR__ . '/pages/product-details.php';
});

route('/checkout', function () {
    include __DIR__ . '/pages/checkout-page.php';
});

route('/admin', function () {
    include __DIR__ . '/pages/admin-page.php';
});

route('/login', function () {
    include __DIR__ . '/pages/login-page.php';
});

route('/404', function () {
    include __DIR__ . '/pages/error-page.php';
});

run();