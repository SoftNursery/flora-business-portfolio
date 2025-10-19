<?php
$products = include __DIR__ . '/../data/products.php';

$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);
$segments = explode('/', trim($path, '/'));
$slug = end($segments);

$product = null;
foreach ($products as $p) {
    if ($p['slug'] === $slug) {
        $product = $p;
        break;
    }
}

if (!$product) {
    echo "<div class='flex items-center justify-center min-h-screen'>";
    echo "<h2 class='text-2xl text-gray-400'>Product not found</h2>";
    echo "</div>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product['name']) ?> - Flora Glass World</title>
    <link href="/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-white">
    <?php include __DIR__ . '/../components/shared/header.php'; ?>
    
    <main class="pt-20">
        <section class="min-h-screen py-16 bg-gradient-to-b from-gray-50 to-white">
            <div class="container mx-auto px-4 md:px-6">
                <!-- Navigation -->
                <div class="mb-12">
                    <?php Button('<i class="fa-solid fa-arrow-left mr-2"></i> Back to Shop', 'blue', [
                        'onclick' => "window.location.href='/shop'",
                        'class' => 'inline-flex items-center'
                    ]) ?>
                </div>

                <!-- Product Layout -->
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-20">
                    <!-- Image Section -->
                    <div class="flex items-center justify-center">
                        <div class="relative w-full aspect-square bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100 flex items-center justify-center p-8">
                            <img src="<?= htmlspecialchars($product['image']) ?>"
                                alt="<?= htmlspecialchars($product['name']) ?>"
                                class="w-full h-full object-contain" />
                            
                            <?php if (!empty($product['badge'])): ?>
                                <div class="absolute top-6 right-6 bg-gradient-to-r from-red-500 to-red-600 text-white text-xs font-bold px-4 py-2 rounded-full shadow-lg">
                                    <?= htmlspecialchars($product['badge']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Details Section -->
                    <div class="flex flex-col justify-center space-y-8">
                        <!-- Category Badge -->
                        <div>
                            <span class="inline-block text-xs font-semibold tracking-widest text-primary uppercase bg-primary/10 px-4 py-2 rounded-full mb-6">
                                <?= htmlspecialchars($product['category']) ?>
                            </span>
                        </div>

                        <!-- Product Title -->
                        <div>
                            <h1 class="font-serif text-5xl md:text-6xl font-light text-gray-900 leading-tight mb-6">
                                <?= htmlspecialchars($product['name']) ?>
                            </h1>
                            <div class="flex items-baseline gap-4 pb-6 border-b border-gray-200">
                                <span class="text-4xl font-bold text-primary">
                                    $<?= number_format($product['price'], 2) ?>
                                </span>
                                <span class="text-sm text-gray-500">In stock</span>
                            </div>
                        </div>

                        <!-- Description -->
                        <p class="text-lg text-gray-600 leading-relaxed font-light">
                            <?= htmlspecialchars($product['description']) ?>
                        </p>

                        <!-- Features Section -->
                        <div class="p-8 bg-gradient-to-br from-gray-50 to-gray-100 rounded-xl border border-gray-200">
                            <h3 class="font-semibold text-gray-900 text-lg mb-6">Key Features</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-4">
                                    <i class="fa-solid fa-check-circle text-primary mt-1 flex-shrink-0"></i>
                                    <span class="text-gray-700">Premium quality materials sourced globally</span>
                                </li>
                                <li class="flex items-start gap-4">
                                    <i class="fa-solid fa-check-circle text-primary mt-1 flex-shrink-0"></i>
                                    <span class="text-gray-700">Professional installation available</span>
                                </li>
                                <li class="flex items-start gap-4">
                                    <i class="fa-solid fa-check-circle text-primary mt-1 flex-shrink-0"></i>
                                    <span class="text-gray-700">Comprehensive 5-year warranty included</span>
                                </li>
                                <li class="flex items-start gap-4">
                                    <i class="fa-solid fa-check-circle text-primary mt-1 flex-shrink-0"></i>
                                    <span class="text-gray-700">Custom sizing and design options</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex gap-4 pt-4">
                            <form action="/cart/add.php" method="POST" class="flex-1">
                                <input type="hidden" name="product_id"
                                    value="<?= htmlspecialchars($product['id']) ?>" />
                                <button type="submit"
                                    class="w-full bg-gradient-to-r from-primary to-primary/90 hover:from-primary/90 hover:to-primary text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 flex items-center justify-center gap-3">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    <span>Add to Cart</span>
                                </button>
                            </form>
                            <button class="bg-white border-2 border-gray-200 text-gray-700 px-8 py-4 rounded-xl font-semibold hover:border-primary hover:text-primary transition-all duration-300 flex items-center justify-center gap-2 hover:bg-primary/5">
                                <i class="fa-regular fa-heart text-xl"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/../components/shared/footer.php'; ?>
</body>

</html>