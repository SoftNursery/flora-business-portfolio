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

<body class="min-h-screen flex items-center justify-center bg-lightGrey">

    <div class="bg-white rounded-2xl shadow-lg w-full max-w-md p-8">
        <div class="text-center mb-8">
            <div class="flex justify-center mb-3">
                <div class="bg-blue-600 text-white p-4 rounded-full">
                    <i class="fa-solid fa-user-shield text-3xl"></i>
                </div>
            </div>
            <h1 class="text-3xl font-bold text-gray-800">Admin Login</h1>
            <p class="text-gray-500 text-sm mt-1">Sign in to access your dashboard</p>
        </div>

        <form method="POST" class="space-y-5">
            <div>
                <label for="username" class="block text-gray-700 font-medium mb-1">
                    <i class="fa-solid fa-user mr-2 text-gray-500"></i> Username
                </label>
                <input type="text" id="username" name="username"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                    placeholder="Enter your username">
            </div>

            <div>
                <label for="password" class="block text-gray-700 font-medium mb-1">
                    <i class="fa-solid fa-lock mr-2 text-gray-500"></i> Password
                </label>
                <input type="password" id="password" name="password"
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none"
                    placeholder="••••••••">
            </div>

            <a href="/admin"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition flex items-center justify-center gap-2">
                <i class="fa-solid fa-right-to-bracket"></i>
                Login
            </a>
        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            © <?= date("Y") ?> Admin Panel — All rights reserved.
        </p>
    </div>

</body>

</html>