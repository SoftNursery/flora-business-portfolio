<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ✅ Basic SEO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora Glass World | Aluminium Glass Doors, LED Mirrors & Stove Glass Tops in Bangladesh</title>
    <meta name="description" content="Flora Glass World is a leading manufacturer and seller of aluminium glass doors, LED mirrors, vista mirrors, and stove glass tops in Bangladesh. Explore premium quality products for home and commercial use.">
    <meta name="keywords" content="aluminium glass door Bangladesh, LED mirror Bangladesh, vista mirror, stove glass top, glass door manufacturer BD, Flora Glass World">

    <!-- ✅ Open Graph for Social Media -->
    <meta property="og:title" content="Flora Glass World | Aluminium Glass Doors & LED Mirrors in Bangladesh">
    <meta property="og:description" content="Manufacturer and supplier of aluminium glass doors, LED mirrors, vista mirrors, and stove glass tops in Bangladesh. High quality, modern design, and durability.">
    <meta property="og:image" content="https://yourdomain.com/assets/images/og-image.jpg">
    <meta property="og:url" content="https://yourdomain.com/">
    <meta property="og:type" content="website">

    <!-- ✅ Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Flora Glass World | Premium Glass Products in Bangladesh">
    <meta name="twitter:description" content="Explore aluminium glass doors, LED mirrors, and stove glass tops crafted by Flora Glass World Bangladesh.">
    <meta name="twitter:image" content="https://yourdomain.com/assets/images/twitter-card.jpg">

    <!-- ✅ Canonical URL -->
    <link rel="canonical" href="https://yourdomain.com/">

    <!-- ✅ CSS & Fonts -->
    <link href="output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- ✅ Favicon -->
    <link rel="icon" type="image/png" href="/assets/favicon.png">

    <!-- ✅ Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Flora Glass World",
        "url": "https://yourdomain.com/",
        "logo": "https://yourdomain.com/assets/logo.png",
        "sameAs": [
            "https://www.facebook.com/floraglassworld",
            "https://www.instagram.com/floraglassworld",
            "https://www.linkedin.com/company/floraglassworld"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+8801XXXXXXXXX",
            "contactType": "Customer Service",
            "areaServed": "BD",
            "availableLanguage": "English, Bengali"
        }
    }
    </script>
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