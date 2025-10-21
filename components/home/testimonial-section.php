<?php
$testimonials = include __DIR__ . '/../../data/testimonials.php';
$owner = 'assets/owner.png';
?>

<style>
    @keyframes scroll-x {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    @keyframes scroll-x-reverse {
        0% {
            transform: translateX(-50%);
        }

        100% {
            transform: translateX(0);
        }
    }

    .animate-scroll-x {
        animation: scroll-x 25s linear infinite;
    }

    .animate-scroll-x-reverse {
        animation: scroll-x-reverse 25s linear infinite;
    }
</style>


<section id="blog" class="py-24 bg-white">
    <div class="">
        <!-- Label -->
        <div class="flex items-center justify-center gap-3 mb-4">
            <div class="h-1 w-8 bg-primary rounded-full"></div>
            <span class="text-primary text-sm font-semibold uppercase tracking-wider">testimonial</span>
            <div class="h-1 w-8 bg-primary rounded-full"></div>
        </div>

        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-darkGrey mb-4">
                What Our<span class="text-primary"> Customers Say</span>
            </h2>
            <p class="text-lg text-[#333333] max-w-3xl mx-auto">
                Insights, trends, and inspiration for your next project.
            </p>
        </div>

        <div class="w-full overflow-hidden space-y-8">
            <!-- top row -->
            <div class="flex w-[200%] animate-scroll-x">
                <!-- Slides duplicated for seamless loop -->
                <div class="flex gap-6 px-6">
                    <?php foreach ($testimonials as $testimonial): ?>
                        <div
                            class="flex-shrink-0 w-[350px] p-6 bg-card border border-primary/25 transition-colors duration-300 bg-lightGrey rounded-lg">
                            <div class="mb-4 text-primary">
                                <i class="fa-xl fa-solid fa-quote-left"></i>
                            </div>

                            <p class="text-foreground/90 mb-6 leading-relaxed text-balance">
                                <?php echo htmlspecialchars($testimonial['content']); ?>
                            </p>

                            <div class="flex items-center gap-3">
                                <img src="<?= $owner ?>" alt="<?php echo htmlspecialchars($testimonial['name']); ?>"
                                    class="w-12 h-12 rounded-full object-cover" />
                                <div>
                                    <p class="font-semibold text-foreground">
                                        <?php echo htmlspecialchars($testimonial['name']); ?>
                                    </p>
                                    <p class="text-sm text-muted-foreground">
                                        <?php echo htmlspecialchars($testimonial['role']); ?> •
                                        <?php echo htmlspecialchars($testimonial['company']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- duplicate set for looping -->
                <div class="flex gap-6 px-6">
                    <?php foreach ($testimonials as $testimonial): ?>
                        <div
                            class="flex-shrink-0 w-[350px] p-6 bg-card border border-primary/25 transition-colors duration-300 bg-lightGrey rounded-lg">
                            <div class="mb-4 text-primary">
                                <i class="fa-xl fa-solid fa-quote-left"></i>
                            </div>

                            <p class="text-foreground/90 mb-6 leading-relaxed text-balance">
                                <?php echo htmlspecialchars($testimonial['content']); ?>
                            </p>

                            <div class="flex items-center gap-3">
                                <img src="<?= $owner ?>" alt="<?php echo htmlspecialchars($testimonial['name']); ?>"
                                    class="w-12 h-12 rounded-full object-cover" />
                                <div>
                                    <p class="font-semibold text-foreground">
                                        <?php echo htmlspecialchars($testimonial['name']); ?>
                                    </p>
                                    <p class="text-sm text-muted-foreground">
                                        <?php echo htmlspecialchars($testimonial['role']); ?> •
                                        <?php echo htmlspecialchars($testimonial['company']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- bottom row -->
            <div class="flex w-[200%] animate-scroll-x-reverse">
                <!-- Slides duplicated for seamless loop -->
                <div class="flex gap-6 px-6">
                    <?php foreach ($testimonials as $testimonial): ?>
                        <div
                            class="flex-shrink-0 w-[350px] p-6 bg-card border border-primary/25 transition-colors duration-300 bg-lightGrey rounded-lg">
                            <div class="mb-4 text-primary">
                                <i class="fa-xl fa-solid fa-quote-left"></i>
                            </div>

                            <p class="text-foreground/90 mb-6 leading-relaxed text-balance">
                                <?php echo htmlspecialchars($testimonial['content']); ?>
                            </p>

                            <div class="flex items-center gap-3">
                                <img src="<?= $owner ?>" alt="<?php echo htmlspecialchars($testimonial['name']); ?>"
                                    class="w-12 h-12 rounded-full object-cover" />
                                <div>
                                    <p class="font-semibold text-foreground">
                                        <?php echo htmlspecialchars($testimonial['name']); ?>
                                    </p>
                                    <p class="text-sm text-muted-foreground">
                                        <?php echo htmlspecialchars($testimonial['role']); ?> •
                                        <?php echo htmlspecialchars($testimonial['company']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- duplicate set for looping -->
                <div class="flex gap-6 px-6">
                    <?php foreach ($testimonials as $testimonial): ?>
                        <div
                            class="flex-shrink-0 w-[350px] p-6 bg-card border border-primary/25 transition-colors duration-300 bg-lightGrey rounded-lg">
                            <div class="mb-4 text-primary">
                                <i class="fa-xl fa-solid fa-quote-left"></i>
                            </div>

                            <p class="text-foreground/90 mb-6 leading-relaxed text-balance">
                                <?php echo htmlspecialchars($testimonial['content']); ?>
                            </p>

                            <div class="flex items-center gap-3">
                                <img src="<?= $owner ?>" alt="<?php echo htmlspecialchars($testimonial['name']); ?>"
                                    class="w-12 h-12 rounded-full object-cover" />
                                <div>
                                    <p class="font-semibold text-foreground">
                                        <?php echo htmlspecialchars($testimonial['name']); ?>
                                    </p>
                                    <p class="text-sm text-muted-foreground">
                                        <?php echo htmlspecialchars($testimonial['role']); ?> •
                                        <?php echo htmlspecialchars($testimonial['company']); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    </div>
</section>