<?php
$facility = 'assets/glass_factory.png';
$owner = 'assets/owner.png';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="">
    <?php include __DIR__ . '/../components/shared/header.php'; ?>
    <main>
        <div class="min-h-screen bg-lightGrey mt-20">

            <!-- Hero Section -->
            <section class="relative background text-white py-20 animate-fade-in">
                <div class="container mx-auto px-4">
                    <div class="max-w-3xl mx-auto text-center animate-slide-up">
                        <h1 class="font-serif text-5xl md:text-6xl mb-6 animate-fade-in">About Flora Glass World</h1>
                        <p class="text-lg md:text-xl text-white/90 leading-relaxed">
                            Crafting excellence in glass and aluminum solutions since 2010. We transform spaces with
                            innovative designs and superior quality products.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Company Overview -->
            <section class="py-16 md:py-24">
                <div class="container mx-auto px-4">
                    <div class="grid md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto animate-slide-up">
                        <div>
                            <h2 class="text-3xl lg:text-5xl font-serif font-bold text-primary mb-6">Who We Are</h2>
                            <p class="text-muted-foreground leading-relaxed mb-4">
                                Flora Glass World is a leading manufacturer and supplier of premium glass and aluminum
                                products. With over a decade of experience, we specialize in creating innovative
                                solutions for residential and commercial spaces.
                            </p>
                            <p class="text-muted-foreground leading-relaxed mb-4">
                                Our product range includes aluminum glass doors, Halosmart mirrors, Vista mirrors, and
                                kitchen glass solutions. Each product is crafted with precision, combining aesthetic
                                appeal with functional excellence.
                            </p>
                            <p class="text-muted-foreground leading-relaxed">
                                We pride ourselves on our commitment to quality, innovation, and customer satisfaction.
                                Our team of skilled craftsmen and designers work tirelessly to bring your vision to
                                life.
                            </p>
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-xl">
                            <img src="<?= $facility ?>" alt="Flora Glass World Facility" class="object-contain">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Core Values -->
            <section class="py-16 md:py-24">
                <div class="container mx-auto px-4">
                    <div class="max-w-6xl mx-auto animate-fade-in">
                        <div class="text-center mb-12">
                            <h2 class="text-3xl lg:text-5xl font-serif font-bold text-primary mb-4">Our Core Values</h2>
                            <p class="text-gray-500">The principles that guide everything we do</p>
                        </div>

                        <div class="grid md:grid-cols-3 gap-8">
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
                                echo '<div class="animate-slide-up border border-gray-200 shadow-xl transition-colors hover:border hover:border-primary rounded-xl p-6 text-center bg-white h-70">';
                                echo '<div class="h-15 w-15 mx-auto flex justify-center items-center text-primary bg-primary/10 rounded-full mb-4">' . $value['icon'] . '</div>';
                                echo '<h3 class="text-xl font-bold text-primary mb-3">' . $value['title'] . '</h3>';
                                echo '<p class="text-gray-500 leading-relaxed">' . $value['description'] . '</p>';
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Company History -->
            <section class="py-16 md:py-24">
                <div class="container mx-auto px-4">
                    <div class="max-w-4xl mx-auto animate-slide-up">
                        <div class="flex items-center gap-3 mb-8 justify-center">
                            <div class="p-3 bg-primary/10 rounded-lg  text-primary">
                                <!-- Calendar Icon -->
                                <i class="fa-regular fa-calendar fa-2x"></i>
                            </div>
                            <h2 class="text-3xl lg:text-5xl font-serif font-bold text-primary">Our Journey</h2>
                        </div>

                        <div
                            class="p-8 space-y-6 animate-slide-up border border-gray-200 shadow-xl transition-colors rounded-xl bg-white ">
                            <div>
                                <h3 class="text-xl font-bold text-primary mb-3">Founded in 2010</h3>
                                <p class="text-muted-foreground leading-relaxed">
                                    Flora Glass World was established with a vision to revolutionize the glass and
                                    aluminum
                                    industry. Starting with a small workshop and a team of passionate craftsmen, we
                                    began our
                                    journey to create exceptional products.
                                </p>
                            </div>

                            <div class="border-t border-gray-300 pt-6">
                                <h3 class="text-xl font-bold text-primary mb-3">Growth & Expansion (2015)</h3>
                                <p class="text-muted-foreground leading-relaxed">
                                    By 2015, our commitment to quality and innovation led to significant growth. We
                                    expanded our
                                    manufacturing facility, introduced new product lines including Halosmart and Vista
                                    mirrors,
                                    and established partnerships with leading architects and designers.
                                </p>
                            </div>

                            <div class="border-t border-gray-300 pt-6">
                                <h3 class="text-xl font-bold text-primary mb-3">Industry Leader (2020-Present)</h3>
                                <p class="text-muted-foreground leading-relaxed">
                                    Today, Flora Glass World stands as a trusted name in the industry, serving thousands
                                    of
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
            <section class="py-16 md:py-24">
                <div class="container mx-auto px-4">
                    <div class="max-w-5xl mx-auto animate-slide-up">
                        <div class="text-center mb-12">
                            <h2 class="text-3xl lg:text-5xl font-serif font-bold text-primary mb-4">Few Words from Our
                                Founder</h2>
                            <p class="text-gray-500">Message from the visionary behind Flora Glass World</p>
                        </div>

                        <div class="shadow-lg border border-gray-200 rounded-lg overflow-hidden lg:flex lg:flex-row-reverse items-center bg-white">
                            <div class="aspect-square max-w-sm rounded-full mx-auto lg:pr-5">
                                <img src="<?= $owner ?>" alt="Founder" class="object-contain rounded-full">
                            </div>
                            <div class="p-8 md:p-12">
                                <div class="text-primary/20">
                                    <i class="fa-solid fa-quote-right fa-3x"></i>
                                </div>
                                <blockquote class="text-gray-600 leading-relaxed mb-6 italic">
                                    "When I founded Flora Glass World in 2010, I had a simple yet powerful vision: to
                                    create glass and aluminum products that don't just meet expectations, but exceed
                                    them in every way. Quality, innovation, and customer satisfaction have been the
                                    pillars of our success.
                                </blockquote>
                                <blockquote class="text-gray-600 leading-relaxed mb-6 italic">
                                    Over the years, I've watched our small workshop grow into a thriving enterprise, but
                                    our core values remain unchanged. Every product that leaves our facility carries
                                    with it our commitment to excellence and our passion for craftsmanship.
                                </blockquote>
                                <blockquote class="text-gray-600 leading-relaxed mb-6 italic">I'm incredibly proud of
                                    what we've achieved, but I'm even more excited about the future. As we continue to
                                    innovate and expand, our focus remains on you—our valued customers. Thank you for
                                    trusting Flora Glass World to be part of your spaces and your lives."</blockquote>
                                <div>
                                    <p class="font-bold text-lg text-primary">Abul Hasan</p>
                                    <p class="text-sm text-gray-600 ">Founder & CEO, Flora Glass World</p>
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