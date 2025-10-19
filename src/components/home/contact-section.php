<?php
$contactImage = 'assets/contact_us2.png';
?>

<section id="contact" class="py-24 bg-white text-white">
    <div class="container mx-auto px-6">
        <!-- Label -->
        <div class="flex items-center justify-center gap-3 mb-4">
            <div class="h-1 w-8 bg-primary rounded-full"></div>
            <span class="text-primary text-sm font-semibold uppercase tracking-wider">Contact</span>
            <div class="h-1 w-8 bg-primary rounded-full"></div>
        </div>

        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-4xl md:text-5xl font-serif font-bold mb-4 text-darkGrey">Get A <span class="text-primary">Quote</span></h2>
            <p class="text-lg text-[#333333] max-w-3xl mx-auto">
                Do you have any question about our products? We'd love to hear from you. Reach out for a complimentary
                consultation.
            </p>
        </div>

        <div class="">
            <!-- Image -->
            <!-- <div class="w-full lg:w-1/2">
                <img src="<?#= $contactImage ?>" alt="Contact Us" />
            </div> -->

            <!-- Form -->
            <div
                class="max-w-xl mt-6 lg:mt-0 mx-auto">
                <form action="contact_submit.php" method="POST" class="space-y-6 text-darkGrey">
                    <div>
                        <label for="name" class="block font-medium">Full Name *</label>
                        <input type="text" name="name" id="name" placeholder="John Doe"
                            class="mt-2 w-full outline-none border border-gray-200 focus:shadow-sm bg-lightGrey p-2 rounded"
                            required>
                    </div>

                    <div>
                        <label for="email" class="block font-medium">Email Address *</label>
                        <input type="email" name="email" id="email" placeholder="john@example.com"
                            class="mt-2 w-full outline-none border border-gray-200 focus:shadow-sm bg-lightGrey p-2 rounded"
                            required>
                    </div>

                    <div>
                        <label for="phone" class="block font-medium">Phone Number *</label>
                        <input type="text" name="phone" id="phone" placeholder="+8801XXXXXXX"
                            class="mt-2 w-full outline-none border border-gray-200 focus:shadow-sm bg-lightGrey p-2 rounded"
                            required>
                    </div>

                    <div>
                        <label for="subject" class="block font-medium">Subject *</label>
                        <input type="text" name="subject" id="subject" placeholder="Product Inquiry"
                            class="mt-2 w-full outline-none border border-gray-200 focus:shadow-sm bg-lightGrey p-2 rounded"
                            required>
                    </div>

                    <div>
                        <label for="message" class="block font-medium">Message *</label>
                        <textarea name="message" id="message" rows="5" placeholder="Tell us how we can help you..."
                            class="mt-2 w-full outline-none border border-gray-200 focus:shadow-sm bg-lightGrey p-2 rounded"
                            required></textarea>
                    </div>

                    <button type="submit"
                        class="w-full bg-primary text-white py-3 rounded-lg hover:bg-primary-dark transition-colors cursor-pointer">Send
                        Message</button>
                </form>
            </div>

        </div>
    </div>
</section>