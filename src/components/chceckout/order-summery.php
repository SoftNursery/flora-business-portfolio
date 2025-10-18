<?php
$cartItems = [
    [
        'id' => 'p1',
        'name' => 'Floral Glass Door',
        'slug' => 'floral-glass-door',
        'price' => 59.99,
        'quantity' => 2,
        'category' => 'Decor',
        'image' => '/../assets/doors/FMAD_102.png'
    ],
    [
        'id' => 'p2',
        'name' => 'Colorful Kitchen Glass',
        'slug' => 'colorful-kitchen-glass',
        'price' => 149.50,
        'quantity' => 1,
        'category' => 'Mirrors',
        'image' => '/../assets/kitchen/GTV_103.png'
    ],
    [
        'id' => 'p3',
        'name' => 'Halosmart Vanity Mirrorp',
        'slug' => 'halosmart-vanity-mirror',
        'price' => 89.99,
        'quantity' => 3,
        'category' => 'Lighting',
        'image' => '/../assets/led_mirrors/FSLM_202.png'
    ]
];
?>

<div class="lg:col-span-1 sticky top-4">
    <div class=" rounded-lg bg-white shadow-md">
        <div class="px-6 py-4">
            <h2 class="text-xl font-semibold">Order Summary</h2>
        </div>
        <div class="p-6 space-y-4">
            <div class="space-y-3">
                <?php foreach ($cartItems as $item): ?>
                    <div class="flex gap-3">
                        <div class="relative w-16 h-16 rounded-md overflow-hidden bg-gray-100 flex-shrink-0">
                            <img src="<?= htmlspecialchars($item['image'] ?? '/placeholder.svg') ?>"
                                alt="<?= htmlspecialchars($item['name']) ?>" class="w-full h-full object-contain" />
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="font-medium text-sm truncate"><?= htmlspecialchars($item['name']) ?></p>
                            <p class="text-sm text-gray-500">Qty: <?= (int) $item['quantity'] ?></p>
                        </div>
                        <p class="font-medium text-sm">
                            $<?= number_format($item['price'] * $item['quantity'], 2) ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>

            <hr class="border-gray-200">

            <?php
            // Compute totals
            $subtotal = 0;
            foreach ($cartItems as $item) {
                $subtotal += $item['price'] * $item['quantity'];
            }
            $shippingCost = 15.00;
            $tax = $subtotal * 0.10;
            $finalTotal = $subtotal + $shippingCost + $tax;
            ?>

            <div class="space-y-2">
                <div class="flex justify-between text-sm">
                    <span class="text-gray-500">Subtotal</span>
                    <span>$<?= number_format($subtotal, 2) ?></span>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-gray-500">Shipping</span>
                    <span>$<?= number_format($shippingCost, 2) ?></span>
                </div>
                <div class="flex justify-between text-sm">
                    <span class="text-gray-500">Tax (10%)</span>
                    <span>$<?= number_format($tax, 2) ?></span>
                </div>
            </div>

            <hr class="border-gray-200">

            <div class="flex justify-between text-lg font-bold">
                <span>Total</span>
                <span class="text-blue-600">$<?= number_format($finalTotal, 2) ?></span>
            </div>
        </div>
    </div>
    
    <!-- Submit Button -->
    <button type="submit"
        class="w-full bg-accent hover:bg-accent/90 text-white font-semibold py-3 rounded-lg transition-colors duration-300 mt-5 cursor-pointer">
        Place Order
    </button>

</div>