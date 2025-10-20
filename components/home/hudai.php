<section id="home" class="min-h-screen bg-center bg-cover relative mt-20"
    style="background-image: url('https://img1.wsimg.com/isteam/getty/1933752815/:/cr=t:5.56%25,l:0%25,w:100%25,h:88.89%25/rs=w:1240,h:620,cg=true');">
    <div class="md:ml-5 absolute w-full top-25">
        <div class="backdrop-blur-xl bg-white/10 shadow-lg p-5 max-w-2xl text-white lg:left-0 z-10 pt-12 relative">

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
    </div>
</section>