<?php
// Example product data (replace with dynamic data from a database or CMS)
$mirrorCategories = [
    ["id" => 1, "description" => "High-quality LED mirror with adjustable brightness and anti-fog feature.", "name" => "LED Mirror", "image" => "../../assets/led_mirror.jpg"],
    ["id" => 2, "description" => "Elegant frameless mirror perfect for bathrooms and dressing areas.", "name" => "Touch Sensor Mirror", "image" => "../../assets/frameless_mirror.png"],
    ["id" => 3, "description" => "Stylish frontlit LED mirror with touch controls and energy-efficient lighting.", "name" => "Round Vanity Mirror", "image" => "../../assets/frontlit_led_mirror.png"],
    ["id" => 4, "description" => "Compact vanity mirror with built-in lighting and adjustable angles.", "name" => "Smart Mirror", "image" => "../../assets/vanity_mirror.jpg"],
];

$doorCategories = [
    ["id" => 1, "description" => "Durable aluminium door with modern aesthetics and weather resistance.", "name" => "Sliding Door", "image" => "../../assets/aluminium_doors.png"],
    ["id" => 2, "description" => "Space-saving sliding glass door with smooth operation and stylish look.", "name" => "Folding Door", "image" => "../../assets/sliding_glass_door.jpg"],
    ["id" => 3, "description" => "Classic hinged glass door with robust construction and elegant design.", "name" => "Glass Door", "image" => "../../assets/Hinged Glass Door.png"],
    ["id" => 4, "description" => "Charming French door with multiple glass panels and traditional appeal.", "name" => "Aluminium Door", "image" => "../../assets/French Door.png"],
];

$showerCategories = [
    ["id" => 1, "description" => "Tempered glass shower door with sleek design and easy installation. ", "name" => "Corner Shower", "image" => "../../assets/glass_shower_door.png"],
    ["id" => 2, "description" => "Modern frameless shower door with minimalist look and durable build. ", "name" => "Sliding Shower", "image" => "../../assets/Frameless_Shower_Door.png"],
    ["id" => 3, "description" => "Compact sliding shower door ideal for small bathrooms and tight spaces. ", "name" => "Frameless Shower", "image" => "../../assets/Sliding Shower Door.png"],
    ["id" => 4, "description" => "Elegant pivot shower door with smooth operation and premium materials. ", "name" => "Custom Shower", "image" => "../../assets/Pivot Shower Door.png"],
];
?>

<section id="products" class="min-h-screen bg-lightGrey py-24">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-3xl lg:text-5xl font-serif font-bold text-primary mb-10">
            Product Categories
        </h1>

        <!-- Mirrors Section -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-darkGrey">Mirrors</h2>
            <div class="bg-darkGrey h-2 rounded-full w-30 mx-auto mb-5"></div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center">
                <?php foreach ($mirrorCategories as $product): ?>
                    <?php
                    $name = $product['name'];
                    $description = $product['description'];
                    $image = $product['image'];
                    include __DIR__ . '/../layout/product-card.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Doors Section -->
        <div class="mb-20">
            <h2 class="text-3xl font-bold text-darkGrey">Interior Doors</h2>
            <div class="bg-darkGrey h-2 rounded-full w-30 mx-auto mb-5"></div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center">
                <?php foreach ($doorCategories as $product): ?>
                    <?php
                    $name = $product['name'];
                    $description = $product['description'];
                    $image = $product['image'];
                    include __DIR__ . '/../layout/product-card.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Showers Section -->
        <div>
            <h2 class="text-3xl font-bold text-darkGrey">Showers</h2>
            <div class="bg-darkGrey h-2 rounded-full w-30 mx-auto mb-5"></div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 justify-items-center">
                <?php foreach ($showerCategories as $product): ?>
                    <?php
                    $name = $product['name'];
                    $description = $product['description'];
                    $image = $product['image'];
                    include __DIR__ . '/../layout/product-card.php'; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>