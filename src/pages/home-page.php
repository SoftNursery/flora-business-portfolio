<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="">
    <?php include __DIR__ . '/../components/shared/header.php'; ?>
    <main>
        <?php include __DIR__ . '/../components/home/hero-section.php'; ?>
        <?php include __DIR__ . '/../components/home/about-section.php'; ?>
        <?php include __DIR__ . '/../components/home/product-category-section.php'; ?>
        <?php include __DIR__ . '/../components/home/testimonial-section.php'; ?>
        <?php include __DIR__ . '/../components/home/blog-section.php'; ?>
        <?php include __DIR__ . '/../components/home/contact-section.php'; ?>
    </main>
    <?php include __DIR__ . '/../components/shared/footer.php'; ?>
</body>

</html>