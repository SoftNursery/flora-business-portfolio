<?php
// Example product data (replace with dynamic data from a database or CMS)
$categories = [
    ["id" => 1, "description" => "Modern aluminium doors with contemporary design and superior durability for your home.", "name" => "FloraMax Aluminium Door", "image" => "/../../assets/doors/FMAD_101.png", "featute1" => "Durable & Weather Resistant", "featute2" => "Customizable Designs", "filter" => "doors"],
    ["id" => 2, "description" => "Innovative LED mirrors with smart features and adjustable lighting for any room.", "name" => "Halosmart Mirrors", "image" => "/../../assets/led_mirrors/FSLM_201.png", "featute1" => "LED Technology", "featute2" => "Smart Controls", "filter" => "halosmart"],
    ["id" => 3, "description" => "Elegantly designed mirrors that add sophistication and style to any interior space.", "name" => "Vista Mirrors", "image" => "/../../assets/vista_mirrors/FVM_201.png", "featute1" => "Premium Finish", "featute2" => "Easy Installation", "filter" => "vista"],
    ["id" => 4, "description" => "High-quality glass solutions specifically designed for modern kitchen spaces and cabinets.", "name" => "Kitchen Glass", "image" => "/../../assets/kitchen/GTV_101.png", "featute1" => "Tempered Glass", "featute2" => "Heat Resistant", "filter" => "kitchen"],
];
?>

<section id="categories" class="py-12 sm:py-16 md:py-20 lg:py-24 bg-lightGrey">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center mb-12 sm:mb-16 md:mb-20">
            <!-- Label -->
            <div class="flex items-center justify-center gap-3 mb-4">
                <div class="h-1 w-8 bg-primary rounded-full"></div>
                <span class="text-primary text-sm font-semibold uppercase tracking-wider">Our Collections</span>
                <div class="h-1 w-8 bg-primary rounded-full"></div>
            </div>

            <!-- Heading -->
            <h2
                class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-serif font-bold text-gray-900 mb-4 sm:mb-6 leading-tight">
                Explore Our <span class="text-primary">Product Categories</span>
            </h2>

            <!-- Description -->
            <p class="text-base sm:text-lg text-gray-600 max-w-2xl mx-auto">
                Discover our premium collection of carefully curated products, designed to elevate your living space
                with modern elegance and superior quality.
            </p>
        </div>

        <!-- Categories Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
            <?php foreach ($categories as $category): ?>
                <div class="group cursor-pointer overflow-hidden border border-gray-200 hover:border-primary 
    transition-all duration-300 h-full rounded-2xl shadow-sm animate-fade-in-up flex flex-col">

                    <!-- Image Container -->
                    <div class="relative overflow-hidden bg-gray-200 aspect-[3/2] mt-5">
                        <img src="<?= $category['image'] ?>" alt="<?= $category['name'] ?>"
                            class="w-full h-full object-contain transition-transform duration-700 ease-out group-hover:scale-105" />
                    </div>

                    <!-- Content -->
                    <div class="p-3 flex flex-col flex-grow">
                        <!-- Title -->
                        <h3 class="text-lg sm:text-xl font-bold mb-2 group-hover:text-primary transition-colors">
                            <?= $category['name'] ?>
                        </h3>

                        <!-- Description -->
                        <p class="text-sm sm:text-base text-gray-600 mb-4 line-clamp-2">
                            <?= $category['description'] ?>
                        </p>

                        <!-- Features -->
                        <div class="space-y-2 mb-6">
                            <div class="flex items-center gap-2 text-xs sm:text-sm text-gray-600">
                                <div class="text-primary"><i class="fa-solid fa-check"></i></div>
                                <?= $category['featute1'] ?>
                            </div>
                            <div class="flex items-center gap-2 text-xs sm:text-sm text-gray-600">
                                <div class="text-primary"><i class="fa-solid fa-check"></i></div>
                                <?= $category['featute2'] ?>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="mt-auto">
                            <?php
                            Button('Explore', 'blue', [
                                'onclick' => "window.location.href='/shop?category=" . $category['filter'] . "'"
                            ]);
                            ?>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>

        <!-- Call to Action -->
        <div class="mt-12 sm:mt-16 md:mt-20 text-center">
            <p class="text-gray-600 text-base sm:text-lg mb-6">
                Can't find what you're looking for?
            </p>
            <?php
            Button('View All Products <i class="fa-solid fa-arrow-right"></i>', 'blue', [
                'onclick' => "window.location.href='/shop'"
            ]);
            ?>

        </div>
    </div>

    <style>
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        #categories>div>div:nth-child(1) {
            animation: slideInUp 0.6s ease-out;
        }

        #categories>div>div:nth-child(2) {
            animation: slideInUp 0.6s ease-out 0.1s both;
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</section>