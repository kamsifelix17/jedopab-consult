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
        
        <!-- SUCCESS BANNER -->
        @if (session('success'))
            <div class="mb-8 bg-green-50 border-l-4 border-green-500 p-4 rounded-r-md shadow-sm flex items-center justify-between">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <p class="text-green-700 font-medium">{{ session('success') }}</p>
                </div>
                <button onclick="this.parentElement.style.display='none'" class="text-green-500 hover:text-green-700">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
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
                            <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mr-6 flex-shrink-0 group-hover:bg-brand-gold transition duration-300">
                                <svg class="w-6 h-6 text-brand-gold group-hover:text-brand-navy transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold mb-1">Office Address</h4>
                                <p class="text-gray-300 font-light">5, Twin Obasa Street,<br>Gbagada, Lagos,<br>Nigeria.</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mr-6 flex-shrink-0 group-hover:bg-brand-gold transition duration-300">
                                <svg class="w-6 h-6 text-brand-gold group-hover:text-brand-navy transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-bold mb-1">Phone</h4>
                                <p class="text-gray-300 font-light">0806 655 5802<br>0803 517 5743</p>
                            </div>
                        </div>

                        <div class="flex items-start group">
                            <div class="w-14 h-14 bg-white/10 rounded-2xl flex items-center justify-center mr-6 flex-shrink-0 group-hover:bg-brand-gold transition duration-300">
                                <svg class="w-6 h-6 text-brand-gold group-hover:text-brand-navy transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
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
                        <a href="https://wa.me/2348066555802" target="_blank" class="w-full sm:w-auto bg-white border-2 border-[#25D366] text-[#25D366] px-8 py-4 rounded-full font-extrabold hover:bg-[#25D366] hover:text-white transition flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            WhatsApp
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection