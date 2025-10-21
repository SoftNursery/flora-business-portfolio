<?php
$blogPosts = include __DIR__ . '/../data/blogPosts.php';

// Get slug from route params
$request_uri = $_SERVER['REQUEST_URI'];
$path = parse_url($request_uri, PHP_URL_PATH);
$segments = explode('/', trim($path, '/'));
$slug = end($segments);

// Find blog by slug
$blog = null;
foreach ($blogPosts as $b) {
    if ($b['slug'] === $slug) {
        $blog = $b;
        break;
    }
}

if (!$blog) {
    echo "<h2 class='text-center mt-20 text-gray-500'>Blog not found</h2>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ✅ Basic SEO -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora Glass World | Aluminium Glass Doors, LED Mirrors & Stove Glass Tops in Bangladesh</title>
    <meta name="description"
        content="Flora Glass World is a leading manufacturer and seller of aluminium glass doors, LED mirrors, vista mirrors, and stove glass tops in Bangladesh. Explore premium quality products for home and commercial use.">
    <meta name="keywords"
        content="aluminium glass door Bangladesh, LED mirror Bangladesh, vista mirror, stove glass top, glass door manufacturer BD, Flora Glass World">

    <!-- ✅ Open Graph for Social Media -->
    <meta property="og:title" content="Flora Glass World | Aluminium Glass Doors & LED Mirrors in Bangladesh">
    <meta property="og:description"
        content="Manufacturer and supplier of aluminium glass doors, LED mirrors, vista mirrors, and stove glass tops in Bangladesh. High quality, modern design, and durability.">
    <meta property="og:image" content="https://yourdomain.com/assets/images/og-image.jpg">
    <meta property="og:url" content="https://yourdomain.com/">
    <meta property="og:type" content="website">

    <!-- ✅ Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Flora Glass World | Premium Glass Products in Bangladesh">
    <meta name="twitter:description"
        content="Explore aluminium glass doors, LED mirrors, and stove glass tops crafted by Flora Glass World Bangladesh.">
    <meta name="twitter:image" content="https://yourdomain.com/assets/images/twitter-card.jpg">

    <!-- ✅ Canonical URL -->
    <link rel="canonical" href="https://yourdomain.com/">

    <!-- ✅ CSS & Fonts -->
    <link href="/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out forwards;
        }

        .stagger-1 {
            animation-delay: 0.1s;
            opacity: 0;
        }

        .stagger-2 {
            animation-delay: 0.2s;
            opacity: 0;
        }

        .stagger-3 {
            animation-delay: 0.3s;
            opacity: 0;
        }

        .stagger-4 {
            animation-delay: 0.4s;
            opacity: 0;
        }

        /* Image hover effect */
        .blog-image {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .blog-image:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        /* Reading progress bar */
        .progress-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 4px;
            background: linear-gradient(90deg, #10b981, #3b82f6);
            z-index: 40;
            transition: width 0.2s ease;
        }

        /* Quote styling */
        article blockquote {
            border-left: 4px solid #10b981;
            padding-left: 1.5rem;
            font-style: italic;
            color: #4b5563;
            margin: 2rem 0;
        }

        /* First letter drop cap enhancement */
        article p:first-of-type::first-letter {
            font-family: Georgia, serif;
            line-height: 0.8;
            margin-top: 0.1em;
        }
    </style>
</head>

<body class="text-darkGrey bg-gray-50">
    <!-- Reading Progress Bar -->
    <div class="progress-bar" id="progressBar"></div>

    <!-- Header -->
    <?php include __DIR__ . '/../components/shared/header.php'; ?>

    <!-- Hero Section with Breadcrumb -->
    <div class="bg-gradient-to-br from-primary/5 via-white to-primary/5 pt-24 pb-12 md:pt-28 md:pb-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Breadcrumb -->
            <nav class="flex items-center space-x-2 text-sm text-gray-500 mb-6 animate-fade-in-up stagger-1">
                <a href="/" class="hover:text-primary transition-colors">Home</a>
                <span>/</span>
                <a href="/blog" class="hover:text-primary transition-colors">Blog</a>
                <span>/</span>
                <span class="text-gray-700"><?= htmlspecialchars($blog['category']) ?></span>
            </nav>

            <!-- Category Badge -->
            <div class="mb-4 animate-fade-in-up stagger-2">
                <span
                    class="inline-flex items-center px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider bg-primary/10 text-primary border border-primary/20">
                    <i class="fas fa-tag mr-2 text-xs"></i>
                    <?= htmlspecialchars($blog['category']) ?>
                </span>
            </div>

            <!-- Title -->
            <h1
                class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 leading-tight mb-6 animate-fade-in-up stagger-3">
                <?= htmlspecialchars($blog['title']) ?>
            </h1>

            <!-- Author and Date Info -->
            <div class="flex flex-wrap items-center gap-4 sm:gap-6 text-gray-600 animate-fade-in-up stagger-4">
                <div class="flex items-center space-x-2">
                    <div
                        class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-primary/70 flex items-center justify-center text-white font-semibold">
                        <?= strtoupper(substr($blog['author'], 0, 1)) ?>
                    </div>
                    <div>
                        <p class="text-sm font-semibold text-gray-900"><?= htmlspecialchars($blog['author']) ?></p>
                        <p class="text-xs text-gray-500">Author</p>
                    </div>
                </div>
                <div class="hidden sm:block w-px h-10 bg-gray-300"></div>
                <div class="flex items-center space-x-2">
                    <i class="fa-regular fa-calendar text-primary"></i>
                    <time datetime="<?= htmlspecialchars($blog['date']) ?>" class="text-sm">
                        <?= date('F j, Y', strtotime($blog['date'])) ?>
                    </time>
                </div>
                <div class="hidden sm:block w-px h-10 bg-gray-300"></div>
                <div class="flex items-center space-x-2">
                    <i class="fa-regular fa-clock text-primary"></i>
                    <span class="text-sm"><?= rand(3, 8) ?> min read</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-8 md:py-12">
        <!-- Featured Image -->
        <?php if (!empty($blog['image'])): ?>
            <div class="mb-10 md:mb-14 animate-fade-in">
                <img src="<?= htmlspecialchars($blog['image']) ?>" alt="<?= htmlspecialchars($blog['title']) ?>"
                    class="blog-image w-full h-64 sm:h-80 md:h-96 object-cover rounded-2xl shadow-xl">
            </div>
        <?php endif; ?>

        <!-- Article Content -->
        <article class="bg-white rounded-2xl shadow-sm p-6 sm:p-8 md:p-12 mb-8">
            <div class="prose prose-lg max-w-none">
                <?php
                // Convert newlines to <p> paragraphs
                $paragraphs = explode("\n", trim($blog['content']));
                $isFirst = true;
                foreach ($paragraphs as $p) {
                    if (trim($p) !== '') {
                        $class = $isFirst ? 'mb-6 text-justify text-base sm:text-lg leading-relaxed first-letter:text-5xl sm:first-letter:text-6xl first-letter:font-bold first-letter:text-gray-900 first-letter:float-left first-letter:mr-2 first-letter:mt-1 first-letter:leading-none' : 'mb-6 text-justify text-base sm:text-lg leading-relaxed';
                        echo '<p class="' . $class . '">' . nl2br(htmlspecialchars($p)) . '</p>';
                        $isFirst = false;
                    }
                }
                ?>
            </div>
        </article>

        <!-- Share Section -->
        <div class="bg-gradient-to-r from-primary/5 to-primary/10 rounded-2xl p-6 sm:p-8 mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-1">Enjoyed this article?</h3>
                    <p class="text-sm text-gray-600">Share it with your friends and colleagues</p>
                </div>
                <div class="flex items-center space-x-3">
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white hover:bg-primary hover:text-white text-gray-600 flex items-center justify-center transition-all shadow-sm hover:shadow-md">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white hover:bg-primary hover:text-white text-gray-600 flex items-center justify-center transition-all shadow-sm hover:shadow-md">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white hover:bg-primary hover:text-white text-gray-600 flex items-center justify-center transition-all shadow-sm hover:shadow-md">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#"
                        class="w-10 h-10 rounded-full bg-white hover:bg-primary hover:text-white text-gray-600 flex items-center justify-center transition-all shadow-sm hover:shadow-md">
                        <i class="fas fa-link"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="flex items-center justify-between gap-4 pt-8 border-t border-gray-200">
            <a href="/blog"
                class="inline-flex items-center text-primary hover:text-primary/80 font-semibold group transition-all">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 mr-2 transform group-hover:-translate-x-1 transition-transform" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
                Back to all posts
            </a>
            <a href="#"
                class="inline-flex items-center text-gray-600 hover:text-primary font-semibold transition-colors">
                <i class="fas fa-arrow-up mr-2"></i>
                Back to top
            </a>
        </div>
    </main>

    <?php include __DIR__ . '/../components/shared/footer.php'; ?>

    <!-- Reading Progress Script -->
    <script>
        // Reading progress bar
        window.addEventListener('scroll', () => {
            const winScroll = document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.getElementById('progressBar').style.width = scrolled + '%';
        });

        // Smooth scroll for "back to top"
        document.querySelectorAll('a[href="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });
    </script>
</body>

</html>