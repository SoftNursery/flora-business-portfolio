<?php
include __DIR__ . '/../components/shop/product-filter.php';
include __DIR__ . '/../components/shop/pagination.php';
include __DIR__ . '/../components/shop/product-card.php';
include __DIR__ . '/../components/shop/product-search.php';
include __DIR__ . '/../components/shop/product-sort.php';
$categories = include __DIR__ . '/../data/categories.php';
$products = include __DIR__ . '/../data/products.php';
const ITEMS_PER_PAGE = 12;

// Capture filters from URL
$selectedCategory = $_GET['category'] ?? 'all';
$sortBy = $_GET['sort'] ?? 'featured';
$searchTerm = $_GET['search'] ?? '';
$currentPage = max(1, intval($_GET['page'] ?? 1));

// Filtering
$filteredProducts = array_filter($products, function ($product) use ($searchTerm, $selectedCategory) {
    $matchesSearch = !$searchTerm || stripos($product['name'], $searchTerm) !== false
        || stripos($product['description'], $searchTerm) !== false
        || stripos($product['category'], $searchTerm) !== false;

    $matchesCategory = $selectedCategory === 'all' || $product['category'] === $selectedCategory;
    return $matchesSearch && $matchesCategory;
});

// Sorting
usort($filteredProducts, function ($a, $b) use ($sortBy) {
    switch ($sortBy) {
        case 'price-low':
            return $a['price'] <=> $b['price'];
        case 'price-high':
            return $b['price'] <=> $a['price'];
        case 'name':
            return strcmp($a['name'], $b['name']);
        default:
            return 0;
    }
});

$totalProducts = count($filteredProducts);
$totalPages = ceil($totalProducts / ITEMS_PER_PAGE);
$startIndex = ($currentPage - 1) * ITEMS_PER_PAGE;
$paginatedProducts = array_slice($filteredProducts, $startIndex, ITEMS_PER_PAGE);

// Category Info
$currentCategory = array_values(array_filter($categories, fn($cat) => $cat['value'] === $selectedCategory))[0] ?? [
    'label' => 'All Products',
    'description' => 'Browse our collection of amazing products.',
];
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
</head>

<body class="">
    <?php include __DIR__ . '/../components/shared/header.php'; ?>
    <main>
        <div class="min-h-screen bg-gray-100 mt-20">
            <!-- Hero Section -->
            <section class="relative bg-gradient-to-br from-blue-700 to-blue-600 py-20 text-white"
                style="background-image: url('https://img1.wsimg.com/isteam/getty/1933752815/:/cr=t:5.56%25,l:0%25,w:100%25,h:88.89%25/rs=w:1240,h:620,cg:true'); background-size: cover; background-position: center;">
                <div class="container mx-auto px-4 text-center max-w-3xl">
                    <h1 class="font-serif text-5xl md:text-6xl mb-6 animate-fade-in">
                        <?= htmlspecialchars($currentCategory['label']) ?>
                    </h1>
                    <p class="text-lg opacity-90 animate-fade-in delay-150">
                        <?= htmlspecialchars($currentCategory['description']) ?>
                    </p>
                </div>
            </section>

            <!-- Shop Section -->
            <section class="py-12 md:py-16">
                <div class="container mx-auto px-4">
                    <!-- Search Bar -->
                    <div class="mb-8 animate-fade-in">
                        <?= ProductSearch::render($searchTerm) ?>
                    </div>

                    <!-- Filters + Sort -->
                    <div class="flex flex-col lg:flex-row gap-6 mb-12 animate-fade-in">
                        <?= ProductFilters::render($selectedCategory, $categories) ?>
                        <?= ProductSort::render($sortBy) ?>
                    </div>

                    <!-- Results Count -->
                    <div class="mb-8 text-gray-600 animate-fade-in">
                        <p>
                            Showing <?= $totalProducts > 0 ? $startIndex + 1 : 0 ?>–
                            <?= min($startIndex + ITEMS_PER_PAGE, $totalProducts) ?>
                            of <?= $totalProducts ?> products
                            <?php if ($searchTerm): ?>
                                <span class="ml-2 text-blue-600 font-medium">for
                                    "<?= htmlspecialchars($searchTerm) ?>"</span>
                            <?php endif; ?>
                        </p>
                    </div>

                    <!-- Product Grid -->
                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8 mb-12 animate-fade-in">
                        <?php if (empty($paginatedProducts)): ?>
                            <div class="col-span-full text-center py-16">
                                <p class="text-xl text-gray-500 mb-2">No products found</p>
                                <p class="text-gray-500">Try adjusting your search or filters</p>
                            </div>
                        <?php else: ?>
                            <?php foreach ($paginatedProducts as $product): ?>
                                <?= ProductCard::render($product) ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>

                    <!-- Pagination -->
                    <?php if ($totalPages > 1): ?>
                        <?= Pagination::render($currentPage, $totalPages) ?>
                    <?php endif; ?>
                </div>
            </section>
        </div>
    </main>
    <?php include __DIR__ . '/../components/shared/footer.php'; ?>
</body>

</html>