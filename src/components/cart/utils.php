<?php
session_start();

// Initialize cart in session if not exists
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

/**
 * Add product to cart
 * @param array $product ['id', 'name', 'price', 'category', 'image', 'badge']
 */
function addToCart(array $product)
{
    $id = $product['id'];

    // If item exists, increment quantity
    if (isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]['quantity'] += 1;
    } else {
        $product['quantity'] = 1;
        $_SESSION['cart'][$id] = $product;
    }
}

/**
 * Remove product from cart
 */
function removeFromCart(string $productId)
{
    if (isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
    }
}

/**
 * Update quantity of a cart item
 */
function updateQuantity(string $productId, int $quantity)
{
    if ($quantity <= 0) {
        removeFromCart($productId);
        return;
    }

    if (isset($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] = $quantity;
    }
}

/**
 * Clear entire cart
 */
function clearCart()
{
    $_SESSION['cart'] = [];
}

/**
 * Get all cart items
 */
function getCartItems(): array
{
    return $_SESSION['cart'];
}

/**
 * Get total number of items in cart
 */
function getTotalItems(): int
{
    $total = 0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['quantity'];
    }
    return $total;
}

/**
 * Get total price of cart
 */
function getTotalPrice(): float
{
    $total = 0.0;
    foreach ($_SESSION['cart'] as $item) {
        $total += $item['price'] * $item['quantity'];
    }
    return $total;
}
