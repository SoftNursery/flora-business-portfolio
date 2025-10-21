<?php

class ProductCard
{
    public static function render(array $product, int $index = 0): string
    {
        $slug = htmlspecialchars($product['slug']);
        $name = htmlspecialchars($product['name']);
        $description = htmlspecialchars($product['description']);
        $category = htmlspecialchars($product['category']);
        $price = number_format($product['price'], 2);
        $image = htmlspecialchars($product['image']);
        $badge = $product['badge'] ?? null;

        // Small stagger animation delay like Framer Motion (via CSS animation-delay)
        $delay = $index * 0.05;

        ob_start();
        ?>
        <div class="group cursor-pointer overflow-hidden border border-gray-200 hover:border-primary 
                    transition-all duration-300 h-full rounded-2xl shadow-sm animate-fade-in-up bg-white"
            style="animation-delay: <?= $delay ?>s;">
            <div class="block h-full">
                <div class="relative overflow-hidden bg-gray-200 aspect-[3/2] mt-5">
                    <!-- Product Image -->
                    <img src="<?= $image ?>" alt="<?= $name ?>"
                        class="w-full h-full object-contain transition-transform duration-700 ease-out group-hover:scale-105" />

                    <!-- Optional Badge -->
                    <?php if ($badge): ?>
                        <span class="absolute top-4 right-4 bg-accent text-lightGrey text-xs font-semibold 
                                     px-3 py-1 rounded-full shadow-sm uppercase">
                            <?= htmlspecialchars($badge) ?>
                        </span>
                    <?php endif; ?>
                </div>

                <!-- Product Info -->
                <div class="p-6">
                    <p class="text-xs uppercase tracking-wider text-gray-500 mb-2"><?= $category ?></p>
                    <a href="/product/<?= $slug ?>" class="font-serif text-xl mb-2 text-darkGrey group-hover:text-primary transition-colors duration-300">
                        <?= $name ?>
                    </a>
                    <p class="text-sm text-gray-600 mb-4 leading-relaxed line-clamp-2">
                        <?= $description ?>
                    </p>
                    <div class="flex items-center justify-between">
                        <p class="text-2xl font-semibold text-primary">$<?= $price ?></p>
                        <a href="/product/<?= $slug ?>" class="flex items-center gap-1 text-sm font-medium text-accent transform 
                                    transition-transform duration-200 group-hover:translate-x-1">
                            View Details ➜
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        return ob_get_clean();
    }
}
?>