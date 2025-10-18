<section id="about" class="py-24 bg-white">
    <div class="container mx-auto px-4 lg:flex lg:items-center lg:gap-8">

        <!-- Text Content -->
        <div class="w-full lg:w-1/2 mb-8 lg:mb-0">
            <h2 class="text-3xl lg:text-5xl font-serif font-bold text-primary">
                Why Choose Flora?
            </h2>
            <p class="text-base lg:text-lg text-darkGrey leading-relaxed my-5">
                Our products are crafted from the finest materials, ensuring durability and timeless elegance.
                We blend cutting-edge technology with contemporary aesthetics for a truly modern feel and are
                dedicated to pushing the boundaries of design and quality to deliver exceptional products.
                Your satisfaction is our top priority, and we provide tailored solutions and dedicated support
                for every glass, LED mirror, and aluminium door project.
            </p>
            <?php Button('Go to Shop', 'blue', [
                'onclick' => "window.location.href='/shop'"
            ]) ?>
        </div>

        <!-- Video Content -->
        <div class="w-full lg:w-1/2 flex justify-center">
            <video controls class="rounded-lg w-full max-w-lg lg:max-w-full shadow-lg">
                <source src="assets/LED Mirror Manufacturers.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>

    </div>
</section>