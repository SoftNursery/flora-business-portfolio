<section id="about" class="py-12 sm:py-16 md:py-20 lg:py-24 bg-white">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 xl:gap-16 items-center">

            <!-- Text Content -->
            <div class="w-full order-2 lg:order-1">
                <!-- Decorative Accent -->
                <div class="flex items-center gap-3 mb-4">
                    <div class="h-1 w-8 bg-primary rounded-full"></div>
                    <span class="text-primary text-sm font-semibold uppercase tracking-wider">About Us</span>
                </div>

                <!-- Heading -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl font-serif font-bold text-gray-900 mb-4 sm:mb-6 leading-tight">
                    Why Choose <span class="text-primary">Flora?</span>
                </h2>

                <!-- Description -->
                <p class="text-base sm:text-lg text-gray-600 leading-relaxed mb-6 sm:mb-8">
                    Our products are crafted from the finest materials, ensuring durability and timeless elegance.
                    We blend cutting-edge technology with contemporary aesthetics for a truly modern feel and are
                    dedicated to pushing the boundaries of design and quality to deliver exceptional products.
                </p>

                <!-- Key Features List -->
                <div class="space-y-4 mb-8 sm:mb-10">
                    <div class="flex gap-4 items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-8 w-8 rounded-lg bg-blue-100 mt-1">
                                <svg class="h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-base sm:text-lg font-semibold text-gray-900">Premium Materials</h3>
                            <p class="text-sm sm:text-base text-gray-600">Finest quality craftsmanship and durability</p>
                        </div>
                    </div>

                    <div class="flex gap-4 items-start">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-8 w-8 rounded-lg bg-blue-100 mt-1">
                                <svg class="h-5 w-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-base sm:text-lg font-semibold text-gray-900">Cutting-Edge Technology</h3>
                            <p class="text-sm sm:text-base text-gray-600">Modern innovations with contemporary design</p>
                        </div>
                    </div>
                </div>

                <!-- CTA Button -->
                <button onclick="window.location.href='/shop'"
                    class="cursor-pointer px-6 sm:px-8 py-2.5 sm:py-3 bg-primary hover:bg-primary/90 text-white font-semibold rounded-lg transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl text-sm sm:text-base inline-flex items-center gap-2 group">
                    Go to Shop
                    <svg class="h-4 w-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </button>
            </div>

            <!-- Video Content -->
            <div class="w-full order-1 lg:order-2">
                <div class="relative rounded-xl sm:rounded-2xl overflow-hidden">
                    <!-- Video Container with Aspect Ratio -->
                    <div class="relative w-full pb-[56.25%]">
                        <video controls 
                            class="absolute top-0 left-0 w-full h-full rounded-xl sm:rounded-2xl"
                            >
                            <source src="/../../assets/LED Mirror Manufacturers.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <!-- Video Info -->
                <div class="mt-4 sm:mt-6 text-center">
                    <p class="text-sm sm:text-base text-gray-600">LED Mirror Manufacturers - Quality in Motion</p>
                </div>
            </div>

        </div>
    </div>

    <style>
        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        #about > div > div > div:nth-child(1) {
            animation: slideInLeft 0.6s ease-out;
        }

        #about > div > div > div:nth-child(2) {
            animation: slideInRight 0.6s ease-out;
        }
    </style>
</section>