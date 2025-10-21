<?php
$blogs = include __DIR__ . '/../../data/blogPosts.php';
$blogs = array_slice($blogs, 0, 3);
?>

<section id="blog" class="py-24 bg-lightGrey">
    <div class="container mx-auto px-6">
        <!-- Label -->
        <div class="flex items-center justify-center gap-3 mb-4">
            <div class="h-1 w-8 bg-primary rounded-full"></div>
            <span class="text-primary text-sm font-semibold uppercase tracking-wider">Our Blogs</span>
            <div class="h-1 w-8 bg-primary rounded-full"></div>
        </div>

        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-darkGrey mb-4">
                From Our <span class="text-primary">Journal</span>
            </h2>
            <p class="text-lg text-[#333333] max-w-3xl mx-auto">
                Insights, trends, and inspiration for your next project.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php foreach ($blogs as $blog): ?>
                <div
                    class="group block hover:border bg-white shadow hover:border-primary rounded-lg overflow-hidden transition-shadow hover:shadow-lg">
                    <div class="relative h-48 overflow-hidden">
                        <img src="<?= $blog['image'] ?>" alt="<?= htmlspecialchars($blog['title']) ?>"
                            class="object-cover w-full h-full group-hover:scale-105 transition-transform duration-300">
                        <span
                            class="absolute top-4 left-4 bg-accent px-2 py-1 text-xs text-white rounded"><?= $blog['category'] ?></span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
                            <span class="flex items-center gap-1"><i class="fa-regular fa-calendar"></i>
                                <?= $blog['date'] ?></span>
                            <span class="flex items-center gap-1"><i class="fa-regular fa-user"></i>
                                <?= $blog['author'] ?></span>
                        </div>
                        <a href="/blog/<?= $blog['slug'] ?>"
                            class="text-xl font-bold text-primary mb-3 group-hover:text-accent transition-colors line-clamp-2">
                            <?= htmlspecialchars($blog['title']) ?>
                        </a>
                        <p class="text-gray-500 leading-relaxed mb-4 line-clamp-3">
                            <?= htmlspecialchars($blog['excerpt']) ?>
                        </p>
                        <a href="/blog/<?= $blog['slug'] ?>"
                            class="flex items-center gap-2 text-primary font-semibold group-hover:text-accent transition-colors cursor-pointer">
                            <span>Read More</span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Call to Action -->
        <div class="mt-12 sm:mt-16 md:mt-20 text-center">
            <?php
            Button('See More <i class="fa-solid fa-arrow-right"></i>', 'blue', [
                'onclick' => "window.location.href='/blog'"
            ]);
            ?>

        </div>
    </div>
</section>