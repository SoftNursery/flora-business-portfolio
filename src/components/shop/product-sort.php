<?php

class ProductSort
{
    public static function render(string $sortBy = 'featured'): string
    {
        ob_start(); ?>

        <div class="lg:w-64 animate-fade-in">
            <h3 class="text-sm font-semibold uppercase tracking-wider mb-4 text-gray-900">
                Sort By
            </h3>

            <div class="relative">
                <select id="sort-select" class="w-full appearance-none border border-gray-300 rounded-lg px-4 py-3 text-gray-800 bg-white 
                           focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent
                           transition-all duration-200 hover:border-blue-500 cursor-pointer"
                    onchange="onSortChange(this.value)">
                    <option value="featured" <?= $sortBy === 'featured' ? 'selected' : '' ?>>Featured</option>
                    <option value="price-low" <?= $sortBy === 'price-low' ? 'selected' : '' ?>>Price: Low to High</option>
                    <option value="price-high" <?= $sortBy === 'price-high' ? 'selected' : '' ?>>Price: High to Low</option>
                    <option value="name" <?= $sortBy === 'name' ? 'selected' : '' ?>>Name: A to Z</option>
                </select>

                <!-- Dropdown Arrow Icon -->
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute right-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-500 pointer-events-none" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </div>
        </div>

        <style>
            /* Subtle motion-like fade in */
            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(10px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fade-in {
                animation: fadeIn 0.4s ease-out;
            }

            /* Hover/focus effect equivalent to shadcn’s SelectItem */
            select option:hover,
            select option:focus {
                background-color: #2563eb;
                /* Tailwind blue-600 */
                color: white;
            }
        </style>

        <script>
            function onSortChange(sortValue) {
                // Equivalent to onSortChange(sort) prop in React
                if (typeof window.onSortChange === 'function') {
                    window.onSortChange(sortValue);
                } else {
                    // Default: reload with ?sort= query param
                    const url = new URL(window.location.href);
                    url.searchParams.set('sort', sortValue);
                    window.location.href = url.toString();
                }
            }
        </script>

        <?php
        return ob_get_clean();
    }
}
?>