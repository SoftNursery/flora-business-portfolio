<?php
$show = isset($_GET['show']) ? $_GET['show'] === 'true' : false;
include 'Button.php';
$logo = '/../../assets/2.png';
?>

<header class="fixed top-0 left-0 bg-primary text-lightGrey z-50 shadow-md w-full font-semibold">
    <nav class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <a href="/">
                <img src="<?= $logo ?>" alt="Flora Glass World Logo" class="h-12 cursor-pointer" />
            </a>
            <ul class="hidden md:flex items-center space-x-8 text-lg">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="/shop" class="nav-link">Shop</a></li>
                <li><a href="/about" class="nav-link">About</a></li>
                <li><a href="/contact" class="nav-link">Contact</a></li>
                <li><a href="/blog" class="nav-link">Blog</a></li>
            </ul>

            <div class="hidden md:flex items-center">
                <a class="relative bg-white text-darkGrey px-4 py-2 rounded-lg font-semibold hover:text-primary hover:bg-lightGrey transition-colors duration-300 cursor-pointer inline-flex items-center gap-2" href="/cart">
                    <p class="bg-accent w-5 h-5 rounded-full flex justify-center items-center absolute -top-1 -right-1 text-lightGrey">2</p>
                    <i class="fa-solid fa-cart-shopping"></i> Cart
                </a>
            </div>

            <div class="md:hidden flex items-center gap-4">
                <a class="bg-lightGrey text-darkGrey w-8 h-8 flex justify-center items-center rounded-full relative" href="/cart">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p class="bg-accent w-5 h-5 rounded-full flex justify-center items-center absolute -top-1 -right-1 text-lightGrey">3</p>
                </a>
                <button id="menu-btn" class="text-lightGrey">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden mt-4 overflow-hidden">
            <ul class="flex flex-col space-y-4 items-center pb-4">
                <li><a href="/" class="block hover:text-[#F8F9FB]">Home</a></li>
                <li><a href="/shop" class="block hover:text-[#F8F9FB]">Shop</a></li>
                <li><a href="/about" class="block hover:text-[#F8F9FB]">About</a></li>
                <li><a href="/contact" class="block hover:text-[#F8F9FB]">Contact</a></li>
                <li><a href="/blog" class="block hover:text-[#F8F9FB]">Blog</a></li>
            </ul>
        </div>
    </nav>
</header>

<script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
