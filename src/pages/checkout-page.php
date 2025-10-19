<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora Glass World</title>
    <link href="/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="">
    <?php include __DIR__ . '/../components/shared/header.php'; ?>
    <main>
        <div class="container mx-auto px-4 py-8 mt-20">
            <!-- Back button -->
            <div class="mb-4">
                <button onclick="window.location.href='/cart'"
                    class="flex items-center gap-2 bg-accent text-lightGrey px-5 py-2 rounded-lg font-semibold hover:bg-highlight transition-colors duration-300 cursor-pointer">
                    <i class="fa-solid fa-arrow-left"></i>
                    Back to Cart
                </button>
            </div>

            <h1 class="text-4xl font-serif font-bold mb-8">Checkout</h1>

            <div class="grid lg:grid-cols-3 gap-8">
                <!-- Checkout Form (left) -->
                <div class="lg:col-span-2">
                    <?php include __DIR__ . '/../components/chceckout/checkout-form.php'; ?>
                </div>

                <!-- Order Summary (right) -->
                <div class="lg:col-span-1">
                    <?php include __DIR__ . '/../components/chceckout/order-summery.php'; ?>
                </div>
            </div>
        </div>
    </main>
    <?php include __DIR__ . '/../components/shared/footer.php'; ?>
</body>

</html>