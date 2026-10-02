@extends('layouts.frontend')

@section('title', 'Contact Us | Jedopab Consult Limited')

@section('content')

<!-- 1. HERO SECTION -->
<section class="relative bg-brand-navy pt-32 pb-40 overflow-hidden">
    <img src="https://images.unsplash.com/photo-1606857521015-7f9fcf423740?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Contact Office" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight">Let's Talk</h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto font-light">
            Tell us what you're sourcing, building, or transforming. Our consulting team will get back to you promptly.
        </p>
    </div>
</section>

<!-- 2. CONTACT LAYOUT (Floating Cohesive Card) -->
<section class="pb-24 bg-slate-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 -mt-20">
        
        @if (session('success'))
            <div id="auto-dismiss-alert" class="mb-8 bg-green-50 border-l-4 border-green-500 p-4 rounded-r-md shadow-sm flex items-center justify-between transition-opacity duration-500">
                <div class="flex items-center">
                    <i class="bi bi-check-circle-fill text-green-500 mr-3 text-xl"></i>
                    <p class="text-green-700 font-medium">{{ session('success') }}</p>
                </div>
                <button onclick="this.parentElement.style.display='none'" class="text-green-500 hover:text-green-700 text-xl">
                    <i class="bi bi-x"></i>
                </button>
            </div>
        @endif

        <!-- Unified Floating Card -->
        <div class="flex flex-col lg:flex-row bg-white rounded-3xl shadow-[0_20px_50px_rgba(10,31,68,0.1)] overflow-hidden border border-gray-100">
            
            <!-- Left Column: Contact Information -->
            <div class="lg:w-2/5 bg-brand-navy text-white p-10 md:p-14 relative overflow-hidden">
                <div class="absolute -top-24 -right-24 w-64 h-64 bg-brand-deep rounded-full opacity-20"></div>
                <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-brand-gold rounded-full opacity-10"></div>
                
                <div class="relative z-10">
                    <h3 class="text-3xl font-extrabold mb-10">Get in touch</h3>
                    
                    <div class="space-y-10">
                        <div class="flex items-start group">
                            <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mr-6 flex-shrink-0 group-hover:bg-brand-gold transition duration-300 text-brand-gold group-hover:text-brand-navy text-2xl">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold mb-1">Office Address</h4>
                                <p class="text-gray-300 font-light">5, Twin Obasa Street,<br>Gbagada, Lagos,<br>Nigeria.</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mr-6 flex-shrink-0 group-hover:bg-brand-gold transition duration-300 text-brand-gold group-hover:text-brand-navy text-2xl">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold mb-1">Phone</h4>
                                <p class="text-gray-300 font-light">0806 655 5802<br>0803 517 5743</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mr-6 flex-shrink-0 group-hover:bg-brand-gold transition duration-300 text-brand-gold group-hover:text-brand-navy text-2xl">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold mb-1">Email</h4>
                                <p class="text-gray-300 font-light">jedopabconsult@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Form -->
            <div class="lg:w-3/5 p-10 md:p-14">
                <h3 class="text-2xl font-extrabold text-brand-navy mb-2">Send a message</h3>
                <p class="text-gray-500 mb-8 font-medium">Fill in the details below and we'll respond as soon as possible.</p>
                
                <form action="/contact/submit" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Full Name</label>
                            <input type="text" name="name" placeholder="Your name" required class="w-full bg-slate-50 border-transparent rounded-2xl px-5 py-4 text-sm focus:bg-white focus:ring-2 focus:ring-brand-navy focus:border-transparent outline-none transition shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Organization</label>
                            <input type="text" name="organization" placeholder="Company / Institution" class="w-full bg-slate-50 border-transparent rounded-2xl px-5 py-4 text-sm focus:bg-white focus:ring-2 focus:ring-brand-navy focus:border-transparent outline-none transition shadow-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Email Address</label>
                            <input type="email" name="email" placeholder="you@example.com" required class="w-full bg-slate-50 border-transparent rounded-2xl px-5 py-4 text-sm focus:bg-white focus:ring-2 focus:ring-brand-navy focus:border-transparent outline-none transition shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" name="phone" placeholder="+234..." class="w-full bg-slate-50 border-transparent rounded-2xl px-5 py-4 text-sm focus:bg-white focus:ring-2 focus:ring-brand-navy focus:border-transparent outline-none transition shadow-sm">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">What can we help with?</label>
                        <select name="service" class="w-full bg-slate-50 border-transparent rounded-2xl px-5 py-4 text-sm focus:bg-white focus:ring-2 focus:ring-brand-navy focus:border-transparent outline-none transition shadow-sm text-gray-600 cursor-pointer">
                            <option value="" disabled selected>Select a service...</option>
                            <option value="training">Training & Capacity Development</option>
                            <option value="consultancy">Organizational Consultancy</option>
                            <option value="project-management">Project Management</option>
                            <option value="logistics">Supply & Logistics</option>
                            <option value="other">Other Inquiry</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Message</label>
                        <textarea name="message" rows="4" placeholder="Tell us about your requirements..." required class="w-full bg-slate-50 border-transparent rounded-2xl px-5 py-4 text-sm focus:bg-white focus:ring-2 focus:ring-brand-navy focus:border-transparent outline-none transition shadow-sm resize-none"></textarea>
                    </div>

                    <div class="pt-2 flex flex-col sm:flex-row gap-4 items-center">
                        <button type="submit" class="w-full sm:w-auto bg-brand-gold text-brand-navy px-10 py-4 rounded-full font-extrabold hover:bg-yellow-500 transition shadow-[0_8px_20px_rgb(212,175,55,0.3)] flex items-center justify-center">
                            Send Message
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path></svg>
                        </button>
                        
                        <!-- Secondary WhatsApp Button -->
                        <a href="https://wa.me/2348035175743" target="_blank" class="w-full sm:w-auto bg-white border-2 border-[#25D366] text-[#25D366] px-8 py-4 rounded-full font-extrabold hover:bg-[#25D366] hover:text-white transition flex items-center justify-center">
                            <i class="bi bi-whatsapp mr-2 text-xl"></i> WhatsApp
                            WhatsApp
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection