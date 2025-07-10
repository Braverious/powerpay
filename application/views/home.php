<body class="bg-white text-gray-800">
    <header class="absolute top-0 left-0 w-full z-10 py-4 px-4 sm:px-6 lg:px-8">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center">
                <!-- SVG Icon for Logo -->
                <svg class="w-8 h-8 text-gray-900 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <h1 class="text-2xl font-bold text-gray-900">PowerPay</h1>
            </div>
            <a href="<?= base_url('costumer/Login'); ?>" class="hidden md:inline-block bg-gray-900 text-white font-semibold py-2 px-5 rounded-lg cta-button">Login</a>
        </div>
    </header>

    <main class="hero-bg">
        <div class="container mx-auto min-h-screen flex flex-col justify-center items-center text-center px-4 pt-24 pb-12">
            <h2 class="text-4xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-4">
                Solusi Cepat Pembayaranmu, <br class="hidden md:inline"/> Untuk Tagihan Listrik Pascabayar.
            </h2>
            <p class="text-lg md:text-xl text-gray-700 max-w-2xl mx-auto mb-8">
                Never miss a due date again. PowerPay makes postpaid electricity payments simple, fast, and hassle-free.
            </p>
            <div class="w-full max-w-md">
                <div class="relative">
                    <input type="text" placeholder="Enter Your Customer ID" class="w-full p-4 pr-32 rounded-lg border-2 border-gray-900 focus:ring-2 focus:ring-gray-900 focus:outline-none text-lg">
                    <button class="absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-900 text-white font-semibold py-2.5 px-6 rounded-lg cta-button">
                        Cari Tagihan
                    </button>
                </div>
                <p class="text-xs text-gray-600 mt-2">By continuing, you agree to our Terms of Service.</p>
            </div>
        </div>
    </main>

    <!-- How It Works Section -->
    <section id="how-it-works" class="py-20 section-bg">
        <div class="container mx-auto px-4 text-center">
            <h3 class="text-3xl font-bold mb-2">How It Works</h3>
            <p class="text-gray-600 mb-12 max-w-xl mx-auto">Paying your bill is as easy as 1-2-3. Get it done in under a minute.</p>
            <div class="grid md:grid-cols-3 gap-10">
                <!-- Step 1 -->
                <div class="p-6">
                    <div class="flex items-center justify-center h-16 w-16 mx-auto mb-4 bg-yellow-400 text-gray-900 rounded-full text-2xl font-bold">1</div>
                    <h4 class="text-xl font-semibold mb-2">Enter Your ID</h4>
                    <p class="text-gray-600">Input your unique postpaid customer ID to fetch your latest bill details.</p>
                </div>
                <!-- Step 2 -->
                <div class="p-6">
                    <div class="flex items-center justify-center h-16 w-16 mx-auto mb-4 bg-yellow-400 text-gray-900 rounded-full text-2xl font-bold">2</div>
                    <h4 class="text-xl font-semibold mb-2">Review & Confirm</h4>
                    <p class="text-gray-600">Verify your bill amount and details. Choose your preferred payment method.</p>
                </div>
                <!-- Step 3 -->
                <div class="p-6">
                    <div class="flex items-center justify-center h-16 w-16 mx-auto mb-4 bg-yellow-400 text-gray-900 rounded-full text-2xl font-bold">3</div>
                    <h4 class="text-xl font-semibold mb-2">Pay Securely</h4>
                    <p class="text-gray-600">Complete the payment through our secure gateway. Get an instant confirmation receipt.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h3 class="text-3xl font-bold mb-2">Everything You Need</h3>
                <p class="text-gray-600 max-w-xl mx-auto">We offer features that make your life easier.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 p-8 rounded-lg feature-card">
                    <div class="mb-4"><svg class="w-10 h-10 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg></div>
                    <h4 class="text-xl font-semibold mb-2">Instant Payments</h4>
                    <p class="text-gray-600">No more waiting. Your payments are processed in real-time, 24/7.</p>
                </div>
                <!-- Feature 2 -->
                <div class="bg-gray-50 p-8 rounded-lg feature-card">
                    <div class="mb-4"><svg class="w-10 h-10 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg></div>
                    <h4 class="text-xl font-semibold mb-2">Bank-Level Security</h4>
                    <p class="text-gray-600">We use industry-standard encryption to protect your financial data.</p>
                </div>
                <!-- Feature 3 -->
                <div class="bg-gray-50 p-8 rounded-lg feature-card">
                    <div class="mb-4"><svg class="w-10 h-10 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></div>
                    <h4 class="text-xl font-semibold mb-2">Payment History</h4>
                    <p class="text-gray-600">Easily track your past payments and download receipts whenever you need.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-white">
        <div class="container mx-auto py-12 px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h4 class="text-lg font-semibold mb-2">PowerPay</h4>
                    <p class="text-gray-400">Simple, Fast, Secure.</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-2">Links</h4>
                    <ul class="space-y-1">
                        <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-2">Contact Us</h4>
                    <p class="text-gray-400">support@powerpay.example</p>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-800 pt-6 text-center text-gray-500 text-sm">
                &copy; 2025 PowerPay. All Rights Reserved.
            </div>
        </div>
    </footer>

</body>
</html>
