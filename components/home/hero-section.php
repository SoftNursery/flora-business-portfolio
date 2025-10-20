<section id="home"
    class="min-h-[calc(100vh-20px)] bg-center bg-cover relative mt-20 h-full bg-blend-darken bg-black/50 bg-opacity-50 flex items-center"
    style="background-image: url('https://plus.unsplash.com/premium_photo-1676823553207-758c7a66e9bb?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1470');">

    <div class="backdrop-blur-xs bg-white/10 rounded-lg shadow-lg p-5 max-w-2xl text-white pt-12 relative mx-5">

        <!-- Decorative Dots -->
        <div class="mx-auto lg:mx-0 grid grid-cols-5 gap-4 absolute -top-18 lg:-top-12 lg:-right-12 z-20 w-fit">
            <?php for ($i = 0; $i < 25; $i++): ?>
                <div class="h-2 w-2 rounded-full bg-accent"></div>
            <?php endfor; ?>
        </div>

        <!-- Heading -->
        <h1 class="text-5xl md:text-7xl font-serif font-bold mb-6 drop-shadow-lg">
            Elegance in Every <span class="text-accent">Reflection</span>
        </h1>

        <!-- Description -->
        <p class="text-lg md:text-xl xl:text-2xl mx-auto text-gray-200 mb-5">
            Discover our collection of premium aluminium doors and innovative LED mirrors,
            crafted to bring modern sophistication and quality to your space.
        </p>

        <!-- Buttons -->
        <div class="flex gap-4 mb-5">
            <?php Button('View Collection', 'red', [
                'onclick' => "window.location.href='/shop'"
            ]) ?>
            <?php Button('Request a Quote', 'white', [
                'onclick' => "window.location.href='#contact'"
            ]) ?>
        </div>
    </div>
</section>