<?php
// Example blog posts data (replace with your database or data source)
$blogPosts = include __DIR__ . '/../data/blogPosts.php';

$POSTS_PER_PAGE = 6;

// Get search and category filters from GET params
$searchQuery = isset($_GET['search']) ? strtolower(trim($_GET['search'])) : '';
$selectedCategory = isset($_GET['category']) ? $_GET['category'] : null;
$currentPage = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;

// Filter posts
$filteredPosts = array_filter($blogPosts, function ($post) use ($searchQuery, $selectedCategory) {
    $matchesSearch = !$searchQuery ||
        str_contains(strtolower($post['title']), $searchQuery) ||
        str_contains(strtolower($post['excerpt']), $searchQuery);
    $matchesCategory = !$selectedCategory || $post['category'] === $selectedCategory;
    return $matchesSearch && $matchesCategory;
});

// Pagination
$totalPages = ceil(count($filteredPosts) / $POSTS_PER_PAGE);
$startIndex = ($currentPage - 1) * $POSTS_PER_PAGE;
$currentPosts = array_slice($filteredPosts, $startIndex, $POSTS_PER_PAGE);

// Get unique categories
$categories = array_unique(array_map(fn($p) => $p['category'], $blogPosts));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora Glass World</title>
    <link href="output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="">
    <?php include __DIR__ . '/../components/shared/header.php'; ?>
    <main>
        <div class="min-h-screen bg-lightGrey mt-20">

            <!-- Hero Section -->
            <section class="relative background bg-primary text-white py-20 animate-fade-in">
                <div class="container mx-auto px-4">
                    <div class="max-w-3xl mx-auto text-center animate-slide-up">
                        <h1 class="font-serif text-5xl md:text-6xl mb-6 animate-fade-in">Our Blogs</h1>
                        <p class="text-lg md:text-xl text-white/90 leading-relaxed">
                            Insights, tips, and inspiration for glass and aluminum solutions
                        </p>

                        <!-- Search -->
                        <form method="GET" class="relative w-full md:w-150 mx-auto mt-8">
                            <div class="text-gray-500 absolute left-3 top-1/2 -translate-y-1/2">
                                <i class="fa-solid fa-magnifying-glass fa-sm"></i>
                            </div>
                            <input type="text" name="search" placeholder="Search articles..."
                                value="<?= htmlspecialchars($searchQuery) ?>"
                                class="outline-none pl-10 pr-4 py-2 w-full rounded border bg-white text-darkGrey" />
                        </form>
                    </div>
                </div>
            </section>

            <!-- Filter -->
            <section class="py-8 border border-b-gray-300">
                <div class="container mx-auto px-4">
                    <div class="max-w-6xl mx-auto flex flex-wrap gap-2 justify-center">
                        <a href="?<?= http_build_query(['search' => $searchQuery, 'category' => null]) ?>"
                            class="px-3 py-1 rounded-lg <?= $selectedCategory === null ? 'bg-primary text-white' : 'bg-white border border-gray-200 shadow' ?>">All</a>
                        <?php foreach ($categories as $category): ?>
                            <a href="?<?= http_build_query(['search' => $searchQuery, 'category' => $category]) ?>"
                                class="px-3 py-1 rounded-lg <?= $selectedCategory === $category ? 'bg-primary text-white' : 'bg-white border border-gray-200 shadow' ?>"><?= $category ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <!-- Blog Posts Grid -->
            <section class="py-16 md:py-24">
                <div class="container mx-auto px-4">
                    <div class="max-w-6xl mx-auto">
                        <?php if (count($currentPosts) === 0): ?>
                            <div class="text-center py-16 animate-fade-in">
                                <p class="text-muted-foreground text-lg">No articles found matching your criteria.</p>
                            </div>
                        <?php else: ?>
                            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12 animate-slide-up">
                                <?php foreach ($currentPosts as $post): ?>
                                    <a href="/blog/<?= $post['slug'] ?>"
                                        class="group block hover:border bg-white shadow hover:border-primary rounded-lg overflow-hidden transition-shadow hover:shadow-lg">
                                        <div class="relative h-48 overflow-hidden">
                                            <img src="<?= $post['image'] ?>" alt="<?= htmlspecialchars($post['title']) ?>"
                                                class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                                            <span
                                                class="absolute top-4 left-4 bg-accent px-2 py-1 text-xs text-white rounded"><?= $post['category'] ?></span>
                                        </div>
                                        <div class="p-6">
                                            <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                                                <span class="flex items-center gap-1"><i class="fa-regular fa-calendar"></i>
                                                    <?= $post['date'] ?></span>
                                                <span class="flex items-center gap-1"><i class="fa-regular fa-user"></i>
                                                    <?= $post['author'] ?></span>
                                            </div>
                                            <h3
                                                class="text-xl font-bold text-primary mb-3 group-hover:text-accent transition-colors line-clamp-2">
                                                <?= htmlspecialchars($post['title']) ?>
                                            </h3>
                                            <p class="text-gray-500 leading-relaxed mb-4 line-clamp-3">
                                                <?= htmlspecialchars($post['excerpt']) ?>
                                            </p>
                                            <div
                                                class="flex items-center gap-2 text-primary font-semibold group-hover:text-accent transition-colors">
                                                <span>Read More</span>
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>

                            <!-- Pagination -->
                            <?php if ($totalPages > 1): ?>
                                <div class="flex justify-center gap-2 mt-8">
                                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                        <a href="?<?= http_build_query(['search' => $searchQuery, 'category' => $selectedCategory, 'page' => $i]) ?>"
                                            class="px-3 py-1 border rounded <?= $currentPage == $i ? 'bg-primary text-white' : 'hover:bg-gray-200' ?>">
                                            <?= $i ?>
                                        </a>
                                    <?php endfor; ?>
                                </div>
                            <?php endif; ?>

                        <?php endif; ?>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php include __DIR__ . '/../components/shared/footer.php'; ?>

</body>

</html>