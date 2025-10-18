<?php
$products = include __DIR__ . '/../data/products.php'; // assumes $products array is defined

// Get slug from route params
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);

// Split the path into an array of segments
$segments = explode('/', trim($path, '/'));

// The slug is typically the last segment, or a specific segment depending on your URL structure
$slug = end($segments);

// Find product by slug
$product = null;
foreach ($products as $p) {
    if ($p['slug'] === $slug) {
        $product = $p;
        break;
    }
}

if (!$product) {
    echo "<h2 class='text-center mt-20 text-gray-500'>Product not found</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="">
    <?php include __DIR__ . '/../components/shared/header.php'; ?>
    <main>
        <section class="min-h-screen py-12 mt-20 bg-lightGrey">
            <div class="container mx-auto px-4">
                <!-- Back Button -->
                <div class="mb-8">
                    <?php Button('<i class="fa-solid fa-arrow-left"></i> Back to Shop', 'blue', [
                        'onclick' => "window.location.href='/shop'"
                    ]) ?>
                </div>

                <!-- Product Details -->
                <div class="grid md:grid-cols-2 gap-12 lg:gap-16">
                    <!-- Image -->
                    <div
                        class="relative rounded-lg overflow-hidden flex items-center justify-center p-6">
                        <img src="<?= htmlspecialchars($product['image']) ?>"
                            alt="<?= htmlspecialchars($product['name']) ?>"
                            class="w-full h-auto object-contain max-h-[600px]" />
                        <?php if (!empty($product['badge'])): ?>
                            <span
                                class="absolute top-6 right-6 bg-red-600 text-white text-sm font-semibold px-3 py-1 rounded">
                                <?= htmlspecialchars($product['badge']) ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <!-- Info -->
                    <div class="flex flex-col justify-center">
                        <p class="text-sm uppercase tracking-wider text-gray-500 mb-4">
                            <?= htmlspecialchars($product['category']) ?>
                        </p>
                        <h1 class="font-serif text-4xl md:text-5xl text-gray-900 mb-6">
                            <?= htmlspecialchars($product['name']) ?>
                        </h1>
                        <p class="text-3xl font-semibold text-primary mb-8">$<?= number_format($product['price'], 2) ?>
                        </p>
                        <p class="text-lg text-gray-600 leading-relaxed mb-8">
                            <?= htmlspecialchars($product['description']) ?>
                        </p>

                        <!-- Features -->
                        <div class="mb-8 p-6 bg-gray-100 rounded-lg">
                            <h3 class="font-semibold text-gray-800 mb-4">Product Features</h3>
                            <ul class="space-y-2 text-gray-600">
                                <li>• Premium quality materials</li>
                                <li>• Professional installation available</li>
                                <li>• 5-year warranty included</li>
                                <li>• Custom sizing options</li>
                            </ul>
                        </div>

                        <!-- Actions -->
                        <div class="flex gap-4">
                            <form action="/cart/add.php" method="POST" class="flex-1">
                                <input type="hidden" name="product_id"
                                    value="<?= htmlspecialchars($product['id']) ?>" />
                                <button type="submit"
                                    class="w-full flex justify-center items-center bg-primary text-lightGrey px-5 py-2 rounded-lg font-semibold hover:bg-primary/90 transition-colors duration-300 cursor-pointer gap-2">
                                    <i class="fa-solid fa-cart-shopping"></i> Add to Cart
                                </button>
                            </form>
                            <button class="bg-white border border-gray-200 text-darkGrey px-5 py-2 rounded-lg font-semibold hover:text-primary hover:bg-lightGrey transition-colors duration-300 cursor-pointer inline-flex items-center gap-2">
                                <i class="fa-regular fa-heart"></i>
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