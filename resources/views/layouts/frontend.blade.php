<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Jedopab Consult Limited')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
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
                <a href="/" class="inline-block mb-6 transition-transform hover:scale-105 duration-300">
                    <img src="{{ asset('images/logo-footer.png') }}" alt="Jedopab Consult" class="h-12 w-auto">
                </a>
                <p class="text-sm text-gray-400 leading-relaxed mb-8">
                    Reliable capability development, strategic consulting, infrastructure, and supply chain solutions across Nigeria.
                </p>
                <!-- Bootstrap Social Icons -->
                <div class="flex space-x-3">
                    <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-brand-gold hover:text-brand-navy transition shadow-sm border border-white/10 text-lg">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-brand-gold hover:text-brand-navy transition shadow-sm border border-white/10 text-lg">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-brand-gold hover:text-brand-navy transition shadow-sm border border-white/10 text-lg">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-white/5 rounded-full flex items-center justify-center hover:bg-brand-gold hover:text-brand-navy transition shadow-sm border border-white/10 text-lg">
                        <i class="bi bi-linkedin"></i>
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
                        <i class="bi bi-envelope-fill text-brand-gold mr-3 text-lg"></i>
                        <span class="text-gray-400">jedopabconsult@gmail.com</span>
                    </li>
                    <li class="flex items-start">
                        <i class="bi bi-telephone-fill text-brand-gold mr-3 text-lg"></i>
                        <span class="text-gray-400">0806 655 5802<br>0803 517 5743</span>
                    </li>
                    <li class="flex items-start">
                        <i class="bi bi-geo-alt-fill text-brand-gold mr-3 text-lg"></i>
                        <span class="text-gray-400">5, Twin Obasa Street,<br>Gbagada, Lagos.</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Bottom Copyright & ImpactDev Signature -->
        <div class="border-t border-white/10 pt-8 flex flex-col justify-center items-center text-center space-y-6">
            
            <div class="text-xs text-gray-500 font-medium w-full flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <a href="/login" class="hover:text-white transition cursor-default">&copy;</a> {{ date('Y') }} Jedopab Consult Limited. All rights reserved.
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="hover:text-white transition">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition">Terms of Service</a>
                </div>
            </div>

            <!-- ImpactDev Signature -->
            <div class="pt-4 flex flex-col items-center justify-center w-full">
                <!-- Signature Divider -->
                <div class="flex items-center justify-center gap-3 mb-2">
                    <span class="w-8 h-px bg-slate-700"></span>
                    <span class="text-[10px] uppercase tracking-widest text-slate-500">
                        Crafted with precision
                    </span>
                    <span class="w-8 h-px bg-slate-700"></span>
                </div>

                <!-- Replace '#' with your actual ImpactDev URL once ready -->
                <p class="text-xs text-slate-500 tracking-wide">
                    Website by
                    <a href="https://theimpactdev.com" target="_blank" class="font-serif text-slate-300 tracking-normal ml-1 hover:text-brand-gold transition duration-300">
                        ImpactDev
                    </a>
                </p>
            </div>

        </div>
    </div>
</footer>

    <!-- Master Frontend JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        
        // 1. Mobile Menu Toggle Logic
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

        // 2. Auto-Dismiss Success Alert Logic
        const alertBox = document.getElementById('auto-dismiss-alert');
        if (alertBox) {
            setTimeout(() => {
                // Trigger the fade out
                alertBox.classList.add('opacity-0');
                
                // Wait for the CSS transition to finish, then remove from layout
                setTimeout(() => {
                    alertBox.style.display = 'none';
                }, 500); 
            }, 4000); // 4000ms = 4 seconds before dismissing
        }
        
    });
</script>
</body>
</html>