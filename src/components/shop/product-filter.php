<?php

class ProductFilters
{
    public static function render(string $selectedCategory, array $categories, callable $onCategoryChange = null): string
    {
        ob_start();
        ?>
        <div class="flex-1">
            <h3 class="text-sm font-semibold uppercase tracking-wider mb-4 text-gray-900">
                Filter by Category
            </h3>

            <div class="flex flex-wrap gap-3">
                <?php foreach ($categories as $category):
                    $isActive = $selectedCategory === $category['value'];
                    ?>
                    <div class="inline-block transform transition-transform duration-150 hover:scale-105 active:scale-95">
                        <button class="px-4 py-2 text-sm font-medium rounded-md border border-gray-300 transition-all duration-300
                                   <?= $isActive
                                       ? 'bg-primary text-white'
                                       : 'bg-white text-gray-800'
                                       ?>" data-category="<?= htmlspecialchars($category['value']) ?>"
                            onclick="changeCategory('<?= htmlspecialchars($category['value']) ?>')">
                            <?= htmlspecialchars($category['label']) ?>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <script>
            // Equivalent of onCategoryChange(category.value)
            function changeCategory(category) {
                // This function can be wired to an AJAX filter or form submission
                if (typeof window.onCategoryChange === 'function') {
                    window.onCategoryChange(category);
                } else {
                    // Fallback: reload page with query param
                    const url = new URL(window.location.href);
                    url.searchParams.set('category', category);
                    window.location.href = url.toString();
                }
            }
        </script>
        <?php
        return ob_get_clean();
    }
}
?>