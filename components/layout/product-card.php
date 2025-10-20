<!-- Product Card -->
<div class="cursor-pointer relative group w-full max-w-xs sm:max-w-sm md:w-72 rounded-xl overflow-hidden shadow-2xl">

    <!-- Image Section -->
    <div class="aspect-square">
        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>"
            class="w-full h-full object-cover transition-transform duration-500 ease-in-out group-hover:scale-110">
    </div>

    <!-- Hover Overlay -->
    <div class="absolute inset-0 hover:bg-black/60 transition-all duration-500 ease-in-out">
        <div
            class="p-6 flex flex-col items-center justify-end h-full text-center text-white opacity-0 group-hover:opacity-100 transition-opacity duration-500 ease-in-out">
            <div
                class="transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500 ease-in-out">
                <h3 class="text-2xl font-bold"><?php echo $name; ?></h3>
                <p class="mt-2 text-sm text-gray-200"><?php echo $description; ?></p>
            </div>
        </div>
    </div>
</div>