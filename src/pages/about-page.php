<?php
$facility = 'assets/glass_factory.png';
$owner = 'assets/owner.png';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Flora Glass World</title>
    <link href="output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-lightGrey">
    <?php include __DIR__ . '/../components/shared/header.php'; ?>
    
    <main>
        <div class="min-h-screen bg-lightGrey pt-16 sm:pt-20">

            <!-- Hero Section -->
            <section class="relative background text-white py-12 sm:py-16 md:py-20 animate-fade-in">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-3xl mx-auto text-center animate-slide-up">
                        <h1 class="font-serif text-3xl sm:text-4xl md:text-5xl lg:text-6xl mb-4 sm:mb-6 animate-fade-in">
                            About Flora Glass World
                        </h1>
                        <p class="text-base sm:text-lg md:text-xl text-white/90 leading-relaxed px-4">
                            Crafting excellence in glass and aluminum solutions since 2010. We transform spaces with
                            innovative designs and superior quality products.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Company Overview -->
            <section class="py-12 sm:py-16 md:py-20 lg:py-24">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid md:grid-cols-2 gap-8 md:gap-12 items-center max-w-6xl mx-auto animate-slide-up">
                        <div class="order-2 md:order-1">
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-serif font-bold text-primary mb-4 sm:mb-6">
                                Who We Are
                            </h2>
                            <p class="text-muted-foreground leading-relaxed mb-4 text-sm sm:text-base">
                                Flora Glass World is a leading manufacturer and supplier of premium glass and aluminum
                                products. With over a decade of experience, we specialize in creating innovative
                                solutions for residential and commercial spaces.
                            </p>
                            <p class="text-muted-foreground leading-relaxed mb-4 text-sm sm:text-base">
                                Our product range includes aluminum glass doors, Halosmart mirrors, Vista mirrors, and
                                kitchen glass solutions. Each product is crafted with precision, combining aesthetic
                                appeal with functional excellence.
                            </p>
                            <p class="text-muted-foreground leading-relaxed text-sm sm:text-base">
                                We pride ourselves on our commitment to quality, innovation, and customer satisfaction.
                                Our team of skilled craftsmen and designers work tirelessly to bring your vision to
                                life.
                            </p>
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-xl order-1 md:order-2">
                            <img src="<?= $facility ?>" alt="Flora Glass World Facility" class="object-cover w-full h-64 sm:h-80 md:h-full">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Core Values -->
            <section class="py-12 sm:py-16 md:py-20 lg:py-24 bg-white">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-6xl mx-auto animate-fade-in">
                        <div class="text-center mb-8 sm:mb-12">
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-serif font-bold text-primary mb-3 sm:mb-4">
                                Our Core Values
                            </h2>
                            <p class="text-gray-500 text-sm sm:text-base">The principles that guide everything we do</p>
                        </div>

                        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                            <?php
                            $values = [
                                [
                                    'title' => 'Quality Excellence',
                                    'description' => 'We never compromise on quality. Every product undergoes rigorous testing to ensure it meets our high standards.',
                                    'icon' => '<i class="fa-solid fa-star fa-2x"></i>',
                                ],
                                [
                                    'title' => 'Innovation',
                                    'description' => 'We continuously explore new technologies and designs to stay ahead of industry trends and meet evolving customer needs.',
                                    'icon' => '<i class="fa-solid fa-bullseye fa-2x"></i>',
                                ],
                                [
                                    'title' => 'Customer Focus',
                                    'description' => 'Our customers are at the heart of everything we do. We listen, understand, and deliver solutions that exceed expectations.',
                                    'icon' => '<i class="fa-solid fa-arrows-to-eye fa-2x"></i>',
                                ],
                            ];

                            foreach ($values as $value) {
                                echo '<div class="animate-slide-up border border-gray-200 shadow-lg transition-all hover:shadow-xl hover:border-primary rounded-xl p-6 text-center bg-lightGrey">';
                                echo '<div class="h-14 w-14 sm:h-16 sm:w-16 mx-auto flex justify-center items-center text-primary bg-primary/10 rounded-full mb-4">' . $value['icon'] . '</div>';
                                echo '<h3 class="text-lg sm:text-xl font-bold text-primary mb-3">' . $value['title'] . '</h3>';
                                echo '<p class="text-gray-500 leading-relaxed text-sm sm:text-base">' . $value['description'] . '</p>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Company History -->
            <section class="py-12 sm:py-16 md:py-20 lg:py-24">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-4xl mx-auto animate-slide-up">
                        <div class="flex flex-col sm:flex-row items-center gap-3 mb-6 sm:mb-8 justify-center">
                            <div class="p-3 bg-primary/10 rounded-lg text-primary">
                                <i class="fa-regular fa-calendar fa-xl sm:fa-2x"></i>
                            </div>
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-serif font-bold text-primary text-center sm:text-left">
                                Our Journey
                            </h2>
                        </div>

                        <div class="p-6 sm:p-8 space-y-6 animate-slide-up border border-gray-200 shadow-xl rounded-xl bg-white">
                            <div>
                                <h3 class="text-lg sm:text-xl font-bold text-primary mb-3">Founded in 2010</h3>
                                <p class="text-muted-foreground leading-relaxed text-sm sm:text-base">
                                    Flora Glass World was established with a vision to revolutionize the glass and
                                    aluminum industry. Starting with a small workshop and a team of passionate craftsmen, we
                                    began our journey to create exceptional products.
                                </p>
                            </div>

                            <div class="border-t border-gray-300 pt-6">
                                <h3 class="text-lg sm:text-xl font-bold text-primary mb-3">Growth & Expansion (2015)</h3>
                                <p class="text-muted-foreground leading-relaxed text-sm sm:text-base">
                                    By 2015, our commitment to quality and innovation led to significant growth. We
                                    expanded our manufacturing facility, introduced new product lines including Halosmart and Vista
                                    mirrors, and established partnerships with leading architects and designers.
                                </p>
                            </div>

                            <div class="border-t border-gray-300 pt-6">
                                <h3 class="text-lg sm:text-xl font-bold text-primary mb-3">Industry Leader (2020-Present)</h3>
                                <p class="text-muted-foreground leading-relaxed text-sm sm:text-base">
                                    Today, Flora Glass World stands as a trusted name in the industry, serving thousands of
                                    satisfied customers. We continue to innovate, introducing cutting-edge designs and
                                    sustainable manufacturing practices while maintaining our core values of quality and
                                    customer satisfaction.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Founder's Message -->
            <section class="py-12 sm:py-16 md:py-20 lg:py-24 bg-white">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-5xl mx-auto animate-slide-up">
                        <div class="text-center mb-8 sm:mb-12">
                            <h2 class="text-2xl sm:text-3xl lg:text-4xl xl:text-5xl font-serif font-bold text-primary mb-3 sm:mb-4">
                                Few Words from Our Founder
                            </h2>
                            <p class="text-gray-500 text-sm sm:text-base">Message from the visionary behind Flora Glass World</p>
                        </div>

                        <div class="shadow-lg border border-gray-200 rounded-lg overflow-hidden bg-lightGrey">
                            <div class="flex flex-col lg:flex-row-reverse items-center">
                                <div class="w-full lg:w-2/5 p-6 sm:p-8 flex justify-center">
                                    <div class="w-48 h-48 sm:w-56 sm:h-56 lg:w-64 lg:h-64 rounded-full overflow-hidden shadow-xl">
                                        <img src="<?= $owner ?>" alt="Founder" class="object-cover w-full h-full">
                                    </div>
                                </div>
                                <div class="w-full lg:w-3/5 p-6 sm:p-8 md:p-12">
                                    <div class="text-primary/20 mb-4">
                                        <i class="fa-solid fa-quote-right fa-2x sm:fa-3x"></i>
                                    </div>
                                    <blockquote class="text-gray-600 leading-relaxed mb-4 italic text-sm sm:text-base">
                                        "When I founded Flora Glass World in 2010, I had a simple yet powerful vision: to
                                        create glass and aluminum products that don't just meet expectations, but exceed
                                        them in every way. Quality, innovation, and customer satisfaction have been the
                                        pillars of our success.
                                    </blockquote>
                                    <blockquote class="text-gray-600 leading-relaxed mb-4 italic text-sm sm:text-base">
                                        Over the years, I've watched our small workshop grow into a thriving enterprise, but
                                        our core values remain unchanged. Every product that leaves our facility carries
                                        with it our commitment to excellence and our passion for craftsmanship.
                                    </blockquote>
                                    <blockquote class="text-gray-600 leading-relaxed mb-6 italic text-sm sm:text-base">
                                        I'm incredibly proud of what we've achieved, but I'm even more excited about the future. 
                                        As we continue to innovate and expand, our focus remains on you—our valued customers. 
                                        Thank you for trusting Flora Glass World to be part of your spaces and your lives."
                                    </blockquote>
                                    <div>
                                        <p class="font-bold text-base sm:text-lg text-primary">Abul Hasan</p>
                                        <p class="text-xs sm:text-sm text-gray-600">Founder & CEO, Flora Glass World</p>
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