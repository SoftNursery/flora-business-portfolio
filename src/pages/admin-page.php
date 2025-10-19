<?php
// Dummy data for products
$products = [
    [
        'id' => 1,
        'name' => 'Modern Vase',
        'slug' => 'modern-vase',
        'description' => 'Elegant ceramic vase perfect for any room.',
        'price' => 49.99,
        'category' => 'Home Decor',
        'image' => '/images/vase.jpg',
        'badge' => 'New'
    ],
    [
        'id' => 2,
        'name' => 'Luxury Lamp',
        'slug' => 'luxury-lamp',
        'description' => 'Handcrafted glass lamp with gold accents.',
        'price' => 129.99,
        'category' => 'Lighting',
        'image' => '/images/lamp.jpg',
        'badge' => 'Best Seller'
    ],
];

// Dummy data for orders
$orders = [
    ['id' => 101, 'customer' => 'John Doe', 'total' => 179.98, 'status' => 'Pending'],
    ['id' => 102, 'customer' => 'Jane Smith', 'total' => 89.50, 'status' => 'Shipped'],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora Glass World</title>
    <link href="output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-50 min-h-screen text-gray-900">
    <!-- Sidebar -->
    <div class="flex flex-col md:flex-row min-h-screen">
        <aside class="w-full md:w-64 bg-gray-900 text-white p-6 space-y-6">
            <h1 class="text-2xl font-bold flex items-center gap-2">
                <i class="fa-solid fa-store"></i> Admin Panel
            </h1>

            <nav class="space-y-3">
                <a href="?page=add" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-800">
                    <i class="fa-solid fa-plus"></i> Add Product
                </a>
                <a href="?page=products" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-800">
                    <i class="fa-solid fa-box"></i> Products
                </a>
                <a href="?page=orders" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-800">
                    <i class="fa-solid fa-truck"></i> Orders
                </a>
                <a href="/" class="flex items-center gap-3 p-3 rounded-lg hover:bg-gray-800">
                    <i class="fa-solid fa-right-from-bracket"></i> Logout
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8 space-y-10">

            <?php $page = $_GET['page'] ?? '' ?>

            <?php if ($page === 'add' || $page === ''): ?>
                <!-- Add Product -->
                <section id="add-product" class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-2xl font-semibold mb-6 flex items-center gap-2">
                        <i class="fa-solid fa-plus"></i> Add New Product
                    </h3>
                    <form method="POST" enctype="multipart/form-data" class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block mb-1 font-medium">Product Name</label>
                            <input type="text" name="name" class="w-full border rounded-lg p-2"
                                placeholder="Enter product name">
                        </div>

                        <div>
                            <label class="block mb-1 font-medium">Slug</label>
                            <input type="text" name="slug" class="w-full border rounded-lg p-2" placeholder="modern-vase">
                        </div>

                        <div class="md:col-span-2">
                            <label class="block mb-1 font-medium">Description</label>
                            <textarea name="description" class="w-full border rounded-lg p-2" rows="4"
                                placeholder="Product description..."></textarea>
                        </div>

                        <div>
                            <label class="block mb-1 font-medium">Price</label>
                            <input type="number" name="price" step="0.01" class="w-full border rounded-lg p-2"
                                placeholder="99.99">
                        </div>

                        <div>
                            <label class="block mb-1 font-medium">Category</label>
                            <input type="text" name="category" class="w-full border rounded-lg p-2"
                                placeholder="Home Decor">
                        </div>

                        <div>
                            <label class="block mb-1 font-medium">Badge</label>
                            <input type="text" name="badge" class="w-full border rounded-lg p-2" placeholder="New / Sale">
                        </div>

                        <div>
                            <label class="block mb-1 font-medium">Product Image</label>
                            <input type="file" name="image" class="w-full border rounded-lg p-2">
                        </div>

                        <div class="md:col-span-2">
                            <button type="submit"
                                class="bg-green-600 text-white px-5 py-2 rounded-lg font-semibold hover:bg-green-700 transition">
                                <i class="fa-solid fa-check"></i> Add Product
                            </button>
                        </div>
                    </form>
                </section>

            <?php elseif ($page === 'products'): ?>
                <!-- Product Management -->
                <section id="products" class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-2xl font-semibold mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-box"></i> Products
                    </h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="p-3">ID</th>
                                    <th class="p-3">Image</th>
                                    <th class="p-3">Name</th>
                                    <th class="p-3">Category</th>
                                    <th class="p-3">Price</th>
                                    <th class="p-3">Badge</th>
                                    <th class="p-3 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($products as $product): ?>
                                    <tr class="border-b hover:bg-gray-50">
                                        <td class="p-3"><?= htmlspecialchars($product['id']) ?></td>
                                        <td class="p-3">
                                            <img src="<?= htmlspecialchars($product['image']) ?>"
                                                alt="<?= htmlspecialchars($product['name']) ?>"
                                                class="w-12 h-12 rounded object-cover">
                                        </td>
                                        <td class="p-3 font-semibold"><?= htmlspecialchars($product['name']) ?></td>
                                        <td class="p-3"><?= htmlspecialchars($product['category']) ?></td>
                                        <td class="p-3">$<?= number_format($product['price'], 2) ?></td>
                                        <td class="p-3">
                                            <span
                                                class="bg-blue-100 text-blue-600 px-2 py-1 rounded text-sm"><?= htmlspecialchars($product['badge']) ?></span>
                                        </td>
                                        <td class="p-3 text-center space-x-2">
                                            <button class="text-blue-600 hover:text-blue-800"><i
                                                    class="fa-solid fa-pen"></i></button>
                                            <button class="text-red-600 hover:text-red-800"><i
                                                    class="fa-solid fa-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            <?php elseif ($page === 'orders'): ?>
                <!-- Orders -->
                <section id="orders" class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-2xl font-semibold mb-4 flex items-center gap-2">
                        <i class="fa-solid fa-truck"></i> Orders
                    </h3>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="p-3">Order ID</th>
                                    <th class="p-3">Customer</th>
                                    <th class="p-3">Total</th>
                                    <th class="p-3">Status</th>
                                    <th class="p-3 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($orders as $order): ?>
                                    <tr class="border-b hover:bg-gray-50">
                                        <td class="p-3">#<?= htmlspecialchars($order['id']) ?></td>
                                        <td class="p-3"><?= htmlspecialchars($order['customer']) ?></td>
                                        <td class="p-3">$<?= number_format($order['total'], 2) ?></td>
                                        <td class="p-3">
                                            <span
                                                class="px-2 py-1 rounded text-sm 
                                            <?= $order['status'] === 'Pending' ? 'bg-yellow-100 text-yellow-600' : 'bg-green-100 text-green-600' ?>">
                                                <?= htmlspecialchars($order['status']) ?>
                                            </span>
                                        </td>
                                        <td class="p-3 text-center">
                                            <button class="text-blue-600 hover:text-blue-800"><i
                                                    class="fa-solid fa-eye"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            <?php else: ?>
                <!-- Dashboard or default page -->
            <?php endif; ?>
        </main>
    </div>
</body>

</html>