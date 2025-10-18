<?php
$blogs = [
    [
        'image' => 'assets/blog1.png',
        'category' => 'Design Tips',
        'title' => '5 Ways to Modernize Your Home Entrance',
        'description' => "Discover how aluminium doors can transform your home's first impression...",
        'link' => '#'
    ],
    [
        'image' => 'assets/blog2.png',
        'category' => 'Product Guide',
        'title' => 'The Ultimate Guide to LED Mirror Lighting',
        'description' => 'Learn how to choose the perfect LED mirror for your bathroom...',
        'link' => '#'
    ],
    [
        'image' => 'assets/blog3.png',
        'category' => 'Industry News',
        'title' => 'Why Aluminium is the Future of Sustainable Building',
        'description' => 'Explore the environmental benefits of choosing aluminium products...',
        'link' => '#'
    ],
];
?>

<section id="blog" class="py-24 bg-lightGrey">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-primary mb-4">
                From Our Journal
            </h2>
            <p class="text-lg text-[#333333] max-w-3xl mx-auto">
                Insights, trends, and inspiration for your next project.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php foreach ($blogs as $blog): ?>
                <article class="bg-white rounded-lg overflow-hidden shadow-lg group">
                    <img src="<?= $blog['image'] ?>" alt="Blog Post" class="w-full h-56 object-cover" />
                    <div class="p-6">
                        <p class="text-sm text-accent font-semibold mb-2"><?= $blog['category'] ?></p>
                        <h3 class="text-xl font-serif font-bold text-primary mb-3 group-hover:text-accent transition-colors cursor-pointer">
                            <?= $blog['title'] ?>
                        </h3>
                        <p class="text-[#333333] mb-4"><?= $blog['description'] ?></p>
                        <a href="<?= $blog['link'] ?>" class="font-bold text-[#333333] hover:text-accent">
                            Read More &rarr;
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
