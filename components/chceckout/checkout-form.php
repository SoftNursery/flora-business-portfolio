<div class="lg:col-span-2">
    <form method="POST" action="/checkout/process.php" class="space-y-6">

        <!-- Customer Information -->
        <div class="border border-gray-200 rounded-lg bg-white shadow-sm">
            <div class="border border-gray-200 px-6 py-4">
                <h2 class="text-xl font-semibold">Customer Information</h2>
                <p class="text-sm text-gray-500">Please provide your contact details</p>
            </div>
            <div class="p-6 space-y-4">
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">First Name</label>
                        <input type="text" name="firstName" placeholder="Abul"
                            class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                            required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Last Name</label>
                        <input type="text" name="lastName" placeholder="Hasan"
                            class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                            required>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" name="email" placeholder="yourmail@example.com"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                        required>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Phone Number</label>
                    <input type="tel" name="phone" placeholder="+8801234567890"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                        required>
                </div>
            </div>
        </div>

        <!-- Shipping Address -->
        <div class="border border-gray-200 rounded-lg bg-white shadow-sm">
            <div class="border border-gray-200 px-6 py-4">
                <h2 class="text-xl font-semibold">Shipping Address</h2>
                <p class="text-sm text-gray-500">Where should we deliver your order?</p>
            </div>
            <div class="p-6 space-y-4">
                <div>
                    <label class="block text-sm font-medium mb-1">Street Address</label>
                    <input type="text" name="address" placeholder="5/39, 6/D, Mirpur,"
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                        required>
                </div>

                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">City</label>
                        <input type="text" name="city" placeholder="DHAKA"
                            class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                            required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">State / Province</label>
                        <input type="text" name="state" placeholder="DHA"
                            class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                            required>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Zip / Postal Code</label>
                        <input type="text" name="zipCode" placeholder="10001"
                            class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                            required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Country</label>
                        <input type="text" name="country" placeholder="Bangladesh"
                            class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"
                            required>
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Delivery Notes (Optional)</label>
                    <textarea name="notes" placeholder="Any special instructions for delivery..."
                        class="w-full px-3 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"></textarea>
                </div>
            </div>
        </div>

        <!-- Payment Method -->
        <div class="border border-gray-200 rounded-lg bg-white shadow-sm">
            <div class="border border-gray-200 px-6 py-4">
                <h2 class="text-xl font-semibold">Payment Method</h2>
                <p class="text-sm text-gray-500">Select your preferred payment option</p>
            </div>
            <div class="p-6">
                <div class="space-y-3">
                    <label for="cod"
                        class="flex items-center space-x-3 border border-gray-200 rounded-lg p-4 bg-muted/50 cursor-pointer">
                        <input type="radio" name="paymentMethod" id="cod" value="cod" class="h-5 w-5 accent-primary"
                            checked>
                        <div class="flex items-center gap-3">
                            <i class="fa-regular fa-credit-card text-primary text-lg"></i>
                            <div>
                                <p class="font-medium">Cash on Delivery</p>
                                <p class="text-sm text-gray-500">Pay when you receive your order</p>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </form>
</div>