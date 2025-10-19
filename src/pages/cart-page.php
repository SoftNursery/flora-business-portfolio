<?php
// 🧺 Dummy static cart data
$items = [
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

// 🧮 Simple helpers for totals
function getTotalItems($items)
{
    $count = 0;
    foreach ($items as $item) {
        $count += $item['quantity'];
    }
    return $count;
}

function getSubtotal($items)
{
    $sum = 0;
    foreach ($items as $item) {
        $sum += $item['price'] * $item['quantity'];
    }
    return $sum;
}

$subtotal = getSubtotal($items);
$total = $subtotal; // (You can later add taxes/shipping)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora Glass World</title>
    <link rel="stylesheet" href="/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include __DIR__ . '/../components/shared/header.php'; ?>
    <main class="bg-background min-h-screen py-20 mt-20">

        <div class="container mx-auto px-4">

            <?php if (empty($items)): ?>
                <div class="text-center py-24">
                    <div class="mb-8 flex justify-center">
                        <div class="bg-secondary rounded-full p-8">🛍️</div>
                    </div>
                    <h1 class="font-serif text-4xl mb-4">Your Cart is Empty</h1>
                    <p class="text-lg text-muted-foreground mb-8">
                        Looks like you haven't added any products to your cart yet.
                    </p>
                    <a href="/shop" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Continue
                        Shopping</a>
                </div>

            <?php else: ?>

                <div class="mb-8 flex justify-between items-center">
                    <?php Button('<i class="fa-solid fa-arrow-left"></i> Continue Shopping', 'blue', [
                        'onclick' => "window.location.href='/shop'"
                    ]) ?>

                    <?php Button('Clear Car', 'red') ?>
                </div>

                <h1 class="font-serif text-4xl mb-6">Shopping Cart</h1>

                <div class="grid lg:grid-cols-3 gap-8">
                    <!-- Desktop Table -->
                    <table class="hidden md:table w-full border-collapse mb-8 lg:col-span-2">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="text-left p-3">Product</th>
                                <th class="text-center p-3">Price</th>
                                <th class="text-center p-3">Quantity</th>
                                <th class="text-center p-3">Total</th>
                                <th class="text-center p-3">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($items as $item): ?>
                                <tr class="border-b border-b-gray-300 hover:bg-gray-50">
                                    <td class="p-3 flex items-center gap-4">
                                        <div class="w-20 h-20 bg-gray-200 rounded overflow-hidden">
                                            <img src="<?= htmlspecialchars($item['image']) ?>"
                                                alt="<?= htmlspecialchars($item['name']) ?>"
                                                class="w-full h-full object-contain">
                                        </div>
                                        <div>
                                            <p class="text-xs uppercase text-gray-500">
                                                <?= htmlspecialchars($item['category']) ?>
                                            </p>
                                            <h3 class="font-semibold"><?= htmlspecialchars($item['name']) ?></h3>
                                        </div>
                                    </td>
                                    <td class="text-center p-3">$<?= number_format($item['price'], 2) ?></td>
                                    <td class="text-center p-3"><?= $item['quantity'] ?></td>
                                    <td class="text-center p-3">$<?= number_format($item['price'] * $item['quantity'], 2) ?>
                                    </td>
                                    <td class="text-center p-3">
                                        <button class="cursor-pointer text-accent hover:text-highlight"><i class="fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                    <!-- Order Summary -->
                    <div class="max-w-md p-5 bg-white border border-gray-200 rounded-xl shadow-md lg:col-span-1">
                        <h2 class="font-serif text-2xl mb-4">Order Summary</h2>
                        <div class="flex justify-between mb-2">
                            <span>Subtotal (<?= getTotalItems($items) ?> items)</span>
                            <span>$<?= number_format($subtotal, 2) ?></span>
                        </div>
                        <div class="flex justify-between mb-2">
                            <span>Shipping</span>
                            <span class="text-green-600 font-semibold">Free</span>
                        </div>
                        <div class="border-t pt-2 flex justify-between text-2xl font-semibold">
                            <span>Total</span>
                            <span>$<?= number_format($total, 2) ?></span>
                        </div>
                        <a href="/checkout"
                            class="block mt-6 w-full text-center bg-primary text-white py-3 rounded-xl hover:bg-primary/90">
                            Proceed to Checkout
                        </a>
                        <p class="text-center text-sm mt-4 text-gray-500">
                            Free shipping on all orders<br>5-year warranty included
                        </p>
                    </div>
                </div>

            <?php endif; ?>
        </div>

    </main>
    <?php include __DIR__ . '/../components/shared/footer.php'; ?>
</body>


</html>