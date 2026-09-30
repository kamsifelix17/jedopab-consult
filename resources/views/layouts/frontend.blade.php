<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jedopab Consult Limited | Strategic Insight, Sustainable Impact')</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <!-- Vite Directives for Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-800 bg-white">

    <!-- UNIFIED HEADER -->
    <header class="bg-brand-navy text-white shadow-md sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo Area -->
                <div class="flex-shrink-0 font-bold text-2xl tracking-wider">
                    <a href="/">JEDOPAB <span class="text-brand-gold">CONSULT</span></a>
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="hidden md:flex space-x-8 font-semibold">
                    <a href="/" class="hover:text-brand-gold transition duration-300">Home</a>
                    <a href="/about" class="hover:text-brand-gold transition duration-300">About Us</a>
                    <a href="/services" class="hover:text-brand-gold transition duration-300">Services</a>
                    <a href="/products" class="hover:text-brand-gold transition duration-300">Products</a>
                    <a href="/contact" class="hover:text-brand-gold transition duration-300">Contact</a>
                </nav>

                <!-- Desktop Header CTA Button -->
                <div class="hidden md:block">
                    <a href="/contact" class="bg-brand-gold text-brand-navy px-6 py-2 rounded font-bold hover:bg-yellow-500 transition duration-300 shadow-lg">
                        Consult With Us
                    </a>
                </div>

                <!-- Mobile Menu Hamburger Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobileMenuBtn" class="text-white hover:text-brand-gold focus:outline-none transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="menuIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Dropdown (Hidden by default) -->
        <div id="mobileMenu" class="hidden md:hidden bg-brand-deep border-t border-white/10 absolute w-full shadow-xl">
            <div class="px-4 pt-2 pb-6 space-y-2">
                <a href="/" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-brand-navy hover:text-brand-gold transition">Home</a>
                <a href="/about" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-brand-navy hover:text-brand-gold transition">About Us</a>
                <a href="/services" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-brand-navy hover:text-brand-gold transition">Services</a>
                <a href="/products" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-brand-navy hover:text-brand-gold transition">Products</a>
                <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-brand-navy hover:text-brand-gold transition">Contact</a>
                <div class="pt-4">
                    <a href="/contact" class="block text-center bg-brand-gold text-brand-navy px-6 py-3 rounded-md font-bold hover:bg-yellow-500 shadow-lg transition">
                        Consult With Us
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- MAIN PAGE CONTENT WILL INJECT HERE -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- UNIFIED FOOTER -->
    <footer class="bg-brand-navy text-gray-300 py-12 border-t border-brand-deep">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
            
            <!-- Column 1: Brand -->
            <div>
                <h3 class="text-white text-xl font-bold mb-4">JEDOPAB CONSULT</h3>
                <p class="text-sm mb-4">Developing People. Transforming Organizations. Delivering Impact.</p>
            </div>

            <!-- Column 2: Quick Links -->
            <div>
                <h3 class="text-white text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/about" class="hover:text-brand-gold transition">About Us</a></li>
                    <li><a href="/services" class="hover:text-brand-gold transition">Our Services</a></li>
                    <li><a href="/products" class="hover:text-brand-gold transition">Digital Products</a></li>
                </ul>
            </div>

            <!-- Column 3: Contact Info -->
            <div>
                <h3 class="text-white text-lg font-semibold mb-4">Get In Touch</h3>
                <ul class="space-y-2 text-sm">
                    <li>📍 5, Twin Obasa Street, Gbagada, Lagos.</li>
                    <li>📞 08066555802, 08035175743</li>
                    <li>✉️ jedopabconsult@gmail.com</li>
                </ul>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto px-4 mt-8 pt-8 border-t border-gray-700 text-sm text-center">
            <a href="/login" class="hover:text-white transition cursor-default">&copy;</a> {{ date('Y') }} Jedopab Consult Limited. All rights reserved.
        </div>
    </footer>

    <!-- JavaScript for Mobile Menu Toggle -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobileMenuBtn');
            const menu = document.getElementById('mobileMenu');
            const icon = document.getElementById('menuIcon');
            
            if(btn) {
                btn.addEventListener('click', () => {
                    menu.classList.toggle('hidden');
                    // Toggle between Hamburger and 'X' icon
                    if (menu.classList.contains('hidden')) {
                        icon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
                    } else {
                        icon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
                    }
                });
            }
        });
    </script>
</body>
</html>