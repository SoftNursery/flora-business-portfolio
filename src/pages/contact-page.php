<?php
$contactInfo = [
    [
        'icon' => '<i class="fa-solid fa-location-dot fa-lg"></i>',
        'title' => 'Corporate Office',
        'details' => ['1 JA-9, Gulshan, Dhaka-1212']
    ],
    [
        'icon' => '<i class="fa-solid fa-industry fa-lg"></i>',
        'title' => 'Factory',
        'details' => ['DAG NO.-3021, BARAIDE, 100 FEET MADANI AVENUE, BADDA, DHAKA-1212']
    ],
    [
        'icon' => '<i class="fa-solid fa-phone fa-lg"></i>',
        'title' => 'Call Us',
        'details' => ['+8801908805959', '+8801913307272']
    ],
    [
        'icon' => '<i class="fa-solid fa-envelope fa-lg"></i>',
        'title' => 'Email Us',
        'details' => ['aurorainterior@gmail.com']
    ],
];
?>

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

<body>
    <?php include __DIR__ . '/../components/shared/header.php'; ?>
    <main>
        <div class="min-h-screen bg-lightGrey mt-20">

            <!-- Hero Section -->
            <section class="relative background bg-primary text-white py-20 animate-fade-in">
                <div class="container mx-auto px-4">
                    <div class="max-w-3xl mx-auto text-center animate-slide-up">
                        <h1 class="font-serif text-5xl md:text-6xl mb-6 animate-fade-in">Get In Touch</h1>
                        <p class="text-lg md:text-xl text-white/90 leading-relaxed">
                            Have questions about our products? We're here to help. Reach out to us and we'll respond as
                            soon as possible.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Contact Info Cards -->
            <section class="py-16 md:py-24">
                <div class="container mx-auto px-4">
                    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto animate-slide-up">
                        <?php foreach ($contactInfo as $info): ?>
                            <div
                                class="animate-slide-up aspect-square border border-gray-200 shadow-xl transition-colors hover:border hover:border-primary rounded-xl p-6 text-center bg-white flex justify-center items-center">
                                <div class="">
                                    <div class="h-15 w-15 mx-auto flex justify-center items-center text-primary bg-primary/10 rounded-full mb-4">
                                        <?= $info['icon'] ?>
                                    </div>
                                    <h3 class="text-lg font-bold text-primary mb-3"><?= $info['title'] ?></h3>
                                    <div class="space-y-1">
                                        <?php foreach ($info['details'] as $detail): ?>
                                            <p class="text-sm text-gray-500 "><?= $detail ?></p>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <!-- Contact Form & Map -->
            <section class="py-16 md:py-24">
                <div class="container mx-auto px-4">
                    <div class="max-w-6xl mx-auto">
                        <div class="grid lg:grid-cols-2 gap-12">

                            <!-- Contact Form -->
                            <div class="animate-slide-left">
                                <div class="mb-8">
                                    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Send Us a Message</h2>
                                    <p class="text-gray-500">
                                        Fill out the form below and we'll get back to you within 24 hours.
                                    </p>
                                </div>

                                <div class="bg-white border border-gray-200 shadow-xl transition-colors rounded-xl p-6">
                                    <form action="contact_submit.php" method="POST" class="space-y-6">
                                        <div>
                                            <label for="name" class="block font-medium">Full Name *</label>
                                            <input type="text" name="name" id="name" placeholder="John Doe"
                                                class="mt-2 w-full outline-none border border-gray-200 focus:shadow-sm bg-lightGrey p-2 rounded" required>
                                        </div>

                                        <div>
                                            <label for="email" class="block font-medium">Email Address *</label>
                                            <input type="email" name="email" id="email" placeholder="john@example.com"
                                                class="mt-2 w-full outline-none border border-gray-200 focus:shadow-sm bg-lightGrey p-2 rounded" required>
                                        </div>

                                        <div>
                                            <label for="phone" class="block font-medium">Phone Number *</label>
                                            <input type="text" name="phone" id="phone" placeholder="+8801XXXXXXX"
                                                class="mt-2 w-full outline-none border border-gray-200 focus:shadow-sm bg-lightGrey p-2 rounded" required>
                                        </div>

                                        <div>
                                            <label for="subject" class="block font-medium">Subject *</label>
                                            <input type="text" name="subject" id="subject" placeholder="Product Inquiry"
                                                class="mt-2 w-full outline-none border border-gray-200 focus:shadow-sm bg-lightGrey p-2 rounded" required>
                                        </div>

                                        <div>
                                            <label for="message" class="block font-medium">Message *</label>
                                            <textarea name="message" id="message" rows="5"
                                                placeholder="Tell us how we can help you..."
                                                class="mt-2 w-full outline-none border border-gray-200 focus:shadow-sm bg-lightGrey p-2 rounded" required></textarea>
                                        </div>

                                        <button type="submit"
                                            class="w-full bg-primary text-white py-3 rounded-lg hover:bg-primary-dark transition-colors cursor-pointer">Send
                                            Message</button>
                                    </form>
                                </div>
                            </div>

                            <!-- Map & Additional Info -->
                            <div class="space-y-6 animate-slide-right">
                                <div>
                                    <h2 class="text-3xl md:text-4xl font-bold text-primary mb-4">Visit Our Showroom</h2>
                                    <p class="text-gray-500 mb-6">
                                        Come see our products in person. Our showroom features a wide range of glass and
                                        aluminum solutions for your home or business.
                                    </p>
                                </div>

                                <div class="border border-gray-200 shadow-xl rounded-lg overflow-hidden">
                                    <div class="relative h-[300px] bg-muted">
                                        <iframe
                                            src="https://www.google.com/maps?q=23.809343,90.3661455&z=17&output=embed&hl=en"
                                            width="100%" height="100%" style="border:0;" allowfullscreen loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>

                                <div class="border-2 bg-primary text-white rounded-lg">
                                    <div class="p-6">
                                        <h3 class="text-xl font-bold mb-4">Why Choose Flora Glass World?</h3>
                                        <ul class="space-y-3">
                                            <li class="flex items-start gap-2"><span
                                                    class="text-accent font-bold">✓</span> Over
                                                10 years of industry experience</li>
                                            <li class="flex items-start gap-2"><span
                                                    class="text-accent font-bold">✓</span>
                                                Premium quality products with warranty</li>
                                            <li class="flex items-start gap-2"><span
                                                    class="text-accent font-bold">✓</span>
                                                Expert consultation and installation services</li>
                                            <li class="flex items-start gap-2"><span
                                                    class="text-accent font-bold">✓</span>
                                                Competitive pricing and flexible payment options</li>
                                            <li class="flex items-start gap-2"><span
                                                    class="text-accent font-bold">✓</span>
                                                Dedicated customer support team</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php include __DIR__ . '/../components/shared/footer.php'; ?>
</body>

</html>