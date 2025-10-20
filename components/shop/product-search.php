<?php

class ProductSearch
{
    public static function render(string $searchTerm = ''): string
    {
        ob_start(); ?>

        <div class="relative w-full lg:max-w-md animate-fade-in-up">
            <!-- Search Icon -->
            <svg class="absolute left-4 top-1/2 -translate-y-1/2 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <circle cx="11" cy="11" r="8" />
                <line x1="21" y1="21" x2="16.65" y2="16.65" />
            </svg>

            <!-- Input Field -->
            <input type="text" id="product-search-input" placeholder="Search products..."
                value="<?= htmlspecialchars($searchTerm) ?>" oninput="onSearchChange(this.value)"
                class="w-full pl-12 pr-10 py-3 border border-gray-300 rounded-lg bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" />

            <!-- Clear Button -->
            <button id="clear-search-btn" onclick="onSearchChange('')"
                class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-700 transition-colors hidden">
                <svg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 24 24' fill='none'
                    stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
                    <line x1='18' y1='6' x2='6' y2='18' />
                    <line x1='6' y1='6' x2='18' y2='18' />
                </svg>
            </button>
        </div>

        <style>
            /* Fade-in animation (Framer Motion equivalent) */
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(-10px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fade-in-up {
                animation: fadeInUp 0.4s ease-out;
            }
        </style>

        <script>
            // JS behavior equivalent to onSearchChange and motion.button exit animation
            function onSearchChange(value) {
                const input = document.getElementById('product-search-input');
                const clearBtn = document.getElementById('clear-search-btn');
                input.value = value;

                // Toggle clear button
                if (value.trim() !== '') {
                    clearBtn.classList.remove('hidden');
                } else {
                    clearBtn.classList.add('hidden');
                }

                // Optional: AJAX or filtering logic
                if (typeof window.onSearchChange === 'function') {
                    window.onSearchChange(value);
                }
            }

            // Show clear button if initial value exists
            document.addEventListener("DOMContentLoaded", () => {
                const input = document.getElementById('product-search-input');
                const clearBtn = document.getElementById('clear-search-btn');
                if (input.value.trim() !== '') {
                    clearBtn.classList.remove('hidden');
                }
            });
        </script>
        <?php
        return ob_get_clean();
    }
}
?>