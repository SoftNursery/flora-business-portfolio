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
        'name' => 'Halosmart Vanity Mirror',
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
    <!-- ✅ Basic SEO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora Glass World | Aluminium Glass Doors, LED Mirrors & Stove Glass Tops in Bangladesh</title>
    <meta name="description"
        content="Flora Glass World is a leading manufacturer and seller of aluminium glass doors, LED mirrors, vista mirrors, and stove glass tops in Bangladesh. Explore premium quality products for home and commercial use.">
    <meta name="keywords"
        content="aluminium glass door Bangladesh, LED mirror Bangladesh, vista mirror, stove glass top, glass door manufacturer BD, Flora Glass World">

    <!-- ✅ Open Graph for Social Media -->
    <meta property="og:title" content="Flora Glass World | Aluminium Glass Doors & LED Mirrors in Bangladesh">
    <meta property="og:description"
        content="Manufacturer and supplier of aluminium glass doors, LED mirrors, vista mirrors, and stove glass tops in Bangladesh. High quality, modern design, and durability.">
    <meta property="og:image" content="https://yourdomain.com/assets/images/og-image.jpg">
    <meta property="og:url" content="https://yourdomain.com/">
    <meta property="og:type" content="website">

    <!-- ✅ Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Flora Glass World | Premium Glass Products in Bangladesh">
    <meta name="twitter:description"
        content="Explore aluminium glass doors, LED mirrors, and stove glass tops crafted by Flora Glass World Bangladesh.">
    <meta name="twitter:image" content="https://yourdomain.com/assets/images/twitter-card.jpg">

    <!-- ✅ Canonical URL -->
    <link rel="canonical" href="https://yourdomain.com/">

    <!-- ✅ CSS & Fonts -->
    <link href="output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ✅ Favicon -->
    <link rel="icon" type="image/png" href="/assets/favicon.png">

    <!-- ✅ Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Flora Glass World",
        "url": "https://yourdomain.com/",
        "logo": "https://yourdomain.com/assets/logo.png",
        "sameAs": [
            "https://www.facebook.com/floraglassworld",
            "https://www.instagram.com/floraglassworld",
            "https://www.linkedin.com/company/floraglassworld"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+8801XXXXXXXXX",
            "contactType": "Customer Service",
            "areaServed": "BD",
            "availableLanguage": "English, Bengali"
        }
    }
    </script>
    <style>
        @media (max-width: 1024px) {

            .cart-table th,
            .cart-table td {
                font-size: 0.875rem;
                padding: 0.75rem;
            }
        }

        @media (max-width: 768px) {
            .cart-table {
                font-size: 0.8rem;
            }

            .cart-table th,
            .cart-table td {
                padding: 0.5rem;
            }

            .product-image {
                width: 60px;
                height: 60px;
            }

            .product-info {
                font-size: 0.875rem;
            }
        }
    </style>
</head>

<body>
    <?php include __DIR__ . '/../components/shared/header.php'; ?>

    <main class="bg-gray-50 min-h-screen py-8 sm:py-12 md:py-16 lg:py-20 mt-16 sm:mt-20">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">

            <?php if (empty($items)): ?>
                <!-- Empty Cart State -->
                <div class="text-center py-16 sm:py-24">
                    <div class="mb-6 sm:mb-8 flex justify-center">
                        <div class="bg-blue-100 rounded-full p-6 sm:p-8">
                            <i class="fas fa-shopping-bag text-4xl sm:text-5xl text-blue-600"></i>
                        </div>
                    </div>
                    <h1 class="font-serif text-3xl sm:text-4xl md:text-5xl mb-3 sm:mb-4 text-gray-900">Your Cart is Empty
                    </h1>
                    <p class="text-base sm:text-lg text-gray-600 mb-6 sm:mb-8">
                        Looks like you haven't added any products to your cart yet.
                    </p>
                    <a href="/shop"
                        class="inline-block px-6 sm:px-8 py-2.5 sm:py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors text-sm sm:text-base">
                        <i class="fas fa-arrow-left mr-2"></i>Continue Shopping
                    </a>
                </div>

            <?php else: ?>

                <!-- Page Header with Actions -->
                <div class="mb-6 sm:mb-8 md:mb-10">
                    <div class="hidden md:flex items-center justify-between mb-4 sm:mb-6">
                        <?php Button('<i class="fas fa-arrow-left"></i>Continue Shopping', 'blue', [
                            'onclick' => "window.location.href='/shop'"
                        ]) ?>
                        <?php Button('<i class="fas fa-trash-alt mr-2"></i>Clear Cart', 'red') ?>
                    </div>

                    <div class="flex md:hidden items-center justify-between mb-4 sm:mb-6">
                        <a class="bg-primary text-lightGrey w-8 h-8 flex justify-center items-center rounded-full"
                            href="/shop">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </div>

                    <h1 class="font-serif text-2xl sm:text-3xl md:text-4xl text-gray-900">Shopping Cart</h1>
                    <p class="text-sm sm:text-base text-gray-600 mt-2">
                        <i class="fas fa-shopping-cart mr-2"></i><?= getTotalItems($items) ?>
                        item<?= getTotalItems($items) !== 1 ? 's' : '' ?> in your cart
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 lg:gap-8">

                    <!-- Cart Items Section -->
                    <div class="lg:col-span-2">
                        <!-- Desktop Table View -->
                        <div class="hidden md:block bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="overflow-x-auto">
                                <table class="w-full cart-table">
                                    <thead>
                                        <tr class="bg-gray-100 border-b border-gray-300">
                                            <th class="text-left p-4 font-semibold text-gray-700">Product</th>
                                            <th class="text-center p-4 font-semibold text-gray-700">Price</th>
                                            <th class="text-center p-4 font-semibold text-gray-700">Qty</th>
                                            <th class="text-center p-4 font-semibold text-gray-700">Total</th>
                                            <th class="text-center p-4 font-semibold text-gray-700">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($items as $item): ?>
                                            <tr class="border-b border-gray-200 hover:bg-gray-50 transition-colors">
                                                <td class="p-4">
                                                    <div class="flex items-center gap-4">
                                                        <div
                                                            class="w-20 h-20 bg-gray-200 rounded-lg overflow-hidden flex-shrink-0">
                                                            <img src="<?= htmlspecialchars($item['image']) ?>"
                                                                alt="<?= htmlspecialchars($item['name']) ?>"
                                                                class="w-full h-full object-contain p-2">
                                                        </div>
                                                        <div>
                                                            <p class="text-xs uppercase text-gray-500 font-semibold mb-1">
                                                                <?= htmlspecialchars($item['category']) ?>
                                                            </p>
                                                            <h3 class="font-semibold text-gray-900 text-sm sm:text-base">
                                                                <?= htmlspecialchars($item['name']) ?>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center p-4 font-semibold text-gray-900">
                                                    $<?= number_format($item['price'], 2) ?>
                                                </td>
                                                <td class="text-center p-4">
                                                    <div class="flex items-center justify-center gap-2">
                                                        <button
                                                            class="w-6 h-6 bg-gray-200 rounded hover:bg-gray-300 text-xs">−</button>
                                                        <span
                                                            class="w-8 text-center font-semibold"><?= $item['quantity'] ?></span>
                                                        <button
                                                            class="w-6 h-6 bg-gray-200 rounded hover:bg-gray-300 text-xs">+</button>
                                                    </div>
                                                </td>
                                                <td class="text-center p-4 font-bold text-gray-900">
                                                    $<?= number_format($item['price'] * $item['quantity'], 2) ?>
                                                </td>
                                                <td class="text-center p-4">
                                                    <button
                                                        class="text-red-600 hover:text-red-800 hover:bg-red-50 p-2 rounded transition-colors"
                                                        title="Remove item">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Mobile Card View -->
                        <div class="md:hidden space-y-4">
                            <?php foreach ($items as $item): ?>
                                <div class="bg-white rounded-lg shadow-md p-4 border border-gray-200">
                                    <div class="flex gap-4 mb-4">
                                        <div class="w-20 h-20 bg-gray-200 rounded-lg overflow-hidden flex-shrink-0">
                                            <img src="<?= htmlspecialchars($item['image']) ?>"
                                                alt="<?= htmlspecialchars($item['name']) ?>"
                                                class="w-full h-full object-contain p-2">
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-xs uppercase text-gray-500 font-semibold mb-1">
                                                <?= htmlspecialchars($item['category']) ?>
                                            </p>
                                            <h3 class="font-semibold text-gray-900 text-sm mb-2">
                                                <?= htmlspecialchars($item['name']) ?>
                                            </h3>
                                            <p class="text-sm font-semibold text-gray-900">
                                                $<?= number_format($item['price'], 2) ?>
                                            </p>
                                        </div>
                                        <button
                                            class="text-red-600 hover:text-red-800 h-fit p-2 rounded hover:bg-red-50 transition-colors">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </div>

                                    <div class="flex items-center justify-between pt-4 border-t border-gray-200">
                                        <div class="flex items-center gap-2">
                                            <button
                                                class="w-8 h-8 bg-gray-200 rounded hover:bg-gray-300 text-sm font-semibold transition-colors">−</button>
                                            <span class="w-8 text-center font-semibold"><?= $item['quantity'] ?></span>
                                            <button
                                                class="w-8 h-8 bg-gray-200 rounded hover:bg-gray-300 text-sm font-semibold transition-colors">+</button>
                                        </div>
                                        <div class="text-right">
                                            <p class="text-xs text-gray-600">Total</p>
                                            <p class="font-bold text-lg text-gray-900">
                                                $<?= number_format($item['price'] * $item['quantity'], 2) ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Order Summary Sidebar -->
                    <div class="lg:col-span-1">
                        <div class="bg-white rounded-lg shadow-md p-6 sticky top-24 md:top-28 lg:top-20">
                            <h2 class="font-serif text-xl sm:text-2xl mb-6 text-gray-900">Order Summary</h2>

                            <div class="space-y-3 mb-6 pb-6 border-b border-gray-200">
                                <div class="flex justify-between text-sm sm:text-base">
                                    <span class="text-gray-600">Subtotal (<?= getTotalItems($items) ?> items)</span>
                                    <span class="font-semibold text-gray-900">$<?= number_format($subtotal, 2) ?></span>
                                </div>
                                <div class="flex justify-between text-sm sm:text-base">
                                    <span class="text-gray-600">Shipping</span>
                                    <span class="font-semibold text-green-600">Free</span>
                                </div>
                            </div>

                            <div class="flex justify-between text-lg sm:text-xl font-bold mb-6 text-gray-900">
                                <span>Total</span>
                                <span class="text-blue-600">$<?= number_format($total, 2) ?></span>
                            </div>

                            <a href="/checkout"
                                class="bg-primary text-lightGrey px-5 py-2 rounded-lg font-semibold hover:bg-primary/90 transition-colors duration-300 cursor-pointer gap-2 w-full flex justify-center items-center">
                                <i class="fas fa-lock mr-2"></i>Proceed to Checkout
                            </a>
                        </div>
                    </div>
                </div>

            <?php endif; ?>
        </div>
    </main>

    <?php include __DIR__ . '/../components/shared/footer.php'; ?>

    <script>
        // Add smooth scroll behavior
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>

</html>