<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jedopab Consult Limited')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-gray-800 bg-white selection:bg-brand-gold selection:text-brand-navy">

    <!-- FLOATING LARBEC-STYLE NAVBAR -->
    <div class="fixed top-0 w-full z-50 pt-4 px-4 transition-all duration-300">
        <header class="max-w-6xl mx-auto bg-white/95 backdrop-blur-md rounded-full shadow-lg border border-gray-100 px-6 py-3">
            <div class="flex justify-between items-center h-12">
                <!-- Logo -->
                <div class="flex-shrink-0 transition-transform hover:scale-105 duration-300">
                    <a href="/">
                        <img src="{{ asset('images/logo.png') }}" alt="Jedopab Consult" class="h-10 md:h-12 w-auto">
                    </a>
                </div>
                
                <!-- Desktop Navigation with Active States -->
                <nav class="hidden md:flex space-x-8 font-bold text-sm items-center">
                    <a href="/" class="{{ request()->is('/') ? 'text-brand-navy border-b-2 border-brand-gold pb-1' : 'text-gray-500 hover:text-brand-navy' }} transition duration-300">Home</a>
                    <a href="/about" class="{{ request()->is('about') ? 'text-brand-navy border-b-2 border-brand-gold pb-1' : 'text-gray-500 hover:text-brand-navy' }} transition duration-300">About Us</a>
                    <a href="/services" class="{{ request()->is('services') ? 'text-brand-navy border-b-2 border-brand-gold pb-1' : 'text-gray-500 hover:text-brand-navy' }} transition duration-300">Services</a>
                    <a href="/products" class="{{ request()->is('products') ? 'text-brand-navy border-b-2 border-brand-gold pb-1' : 'text-gray-500 hover:text-brand-navy' }} transition duration-300">Products</a>
                    <a href="/contact" class="{{ request()->is('contact') ? 'text-brand-navy border-b-2 border-brand-gold pb-1' : 'text-gray-500 hover:text-brand-navy' }} transition duration-300">Contact Us</a>
                </nav>

                <!-- Desktop CTA Button -->
                <div class="hidden md:block">
                    <a href="/contact" class="bg-brand-gold text-brand-navy px-6 py-2.5 rounded-full font-bold hover:bg-yellow-500 transition duration-300 shadow-md text-sm">
                        Get in Touch
                    </a>
                </div>

                <!-- Mobile Menu Hamburger -->
                <div class="md:hidden flex items-center">
                    <button id="mobileMenuBtn" class="text-brand-navy hover:text-brand-gold focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="menuIcon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </header>

        <!-- Mobile Navigation Dropdown with Active Focus Blocks -->
        <div id="mobileMenu" class="hidden md:hidden max-w-6xl mx-auto mt-2 bg-brand-navy rounded-3xl shadow-2xl overflow-hidden border border-white/10">
            <div class="px-4 py-6 space-y-2">
                <a href="/" class="block px-4 py-3 rounded-xl font-medium transition {{ request()->is('/') ? 'bg-brand-deep text-brand-gold border border-brand-gold/30' : 'text-white hover:bg-brand-deep' }}">Home</a>
                <a href="/about" class="block px-4 py-3 rounded-xl font-medium transition {{ request()->is('about') ? 'bg-brand-deep text-brand-gold border border-brand-gold/30' : 'text-white hover:bg-brand-deep' }}">About Us</a>
                <a href="/services" class="block px-4 py-3 rounded-xl font-medium transition {{ request()->is('services') ? 'bg-brand-deep text-brand-gold border border-brand-gold/30' : 'text-white hover:bg-brand-deep' }}">Services</a>
                <a href="/products" class="block px-4 py-3 rounded-xl font-medium transition {{ request()->is('products') ? 'bg-brand-deep text-brand-gold border border-brand-gold/30' : 'text-white hover:bg-brand-deep' }}">Products</a>
                <a href="/contact" class="block px-4 py-3 rounded-xl font-medium transition {{ request()->is('contact') ? 'bg-brand-deep text-brand-gold border border-brand-gold/30' : 'text-white hover:bg-brand-deep' }}">Contact Us</a>
            </div>
        </div>
    </div>

    <!-- MAIN PAGE CONTENT -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- LARBEC-STYLE FOOTER -->
    <footer class="bg-brand-navy text-gray-300 pt-20 pb-8 border-t-[6px] border-brand-gold">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                
                <!-- Column 1: Brand & Socials -->
                <div class="lg:pr-8">
                    <h3 class="text-white text-2xl font-extrabold tracking-wider mb-6">JEDOPAB <span class="text-brand-gold">CONSULT</span></h3>
                    <p class="text-sm text-gray-400 leading-relaxed mb-8">
                        Reliable capability development, strategic consulting, infrastructure, and supply chain solutions across Nigeria.
                    </p>
                    <div class="flex space-x-3">
                        <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-brand-gold hover:text-brand-navy transition shadow-sm border border-white/10">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-brand-gold hover:text-brand-navy transition shadow-sm border border-white/10">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-brand-gold hover:text-brand-navy transition shadow-sm border border-white/10">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.769-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z" clip-rule="evenodd"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-brand-gold hover:text-brand-navy transition shadow-sm border border-white/10">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Company -->
                <div>
                    <h4 class="text-white text-lg font-bold mb-6">Company</h4>
                    <ul class="space-y-3 text-sm font-medium">
                        <li><a href="/" class="text-gray-400 hover:text-brand-gold transition">Home</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-brand-gold transition">About Us</a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-brand-gold transition">Services</a></li>
                        <li><a href="/products" class="text-gray-400 hover:text-brand-gold transition">Products</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div>
                    <h4 class="text-white text-lg font-bold mb-6">Services</h4>
                    <ul class="space-y-3 text-sm font-medium">
                        <li><a href="/services#training" class="text-gray-400 hover:text-brand-gold transition">Training & Capacity</a></li>
                        <li><a href="/services#consultancy" class="text-gray-400 hover:text-brand-gold transition">Consultancy</a></li>
                        <li><a href="/services#project-management" class="text-gray-400 hover:text-brand-gold transition">Project Management</a></li>
                        <li><a href="/services#logistics" class="text-gray-400 hover:text-brand-gold transition">Supply & Logistics</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact -->
                <div>
                    <h4 class="text-white text-lg font-bold mb-6">Get in Touch</h4>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start">
                            <span class="text-brand-gold mr-3">📧</span>
                            <span class="text-gray-400">jedopabconsult@gmail.com</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-brand-gold mr-3">📞</span>
                            <span class="text-gray-400">0806 655 5802<br>0803 517 5743</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-brand-gold mr-3">📍</span>
                            <span class="text-gray-400">5, Twin Obasa Street,<br>Gbagada, Lagos.</span>
                        </li>
                    </ul>
                </div>

            </div>
            
            <!-- Bottom Copyright Bar -->
            <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-gray-500 font-medium">
                <div class="mb-4 md:mb-0">
                    <a href="/login" class="hover:text-white transition cursor-default">&copy;</a> {{ date('Y') }} Jedopab Consult Limited. All rights reserved.
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-white transition">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition">Terms of Service</a>
                </div>
            </div>
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