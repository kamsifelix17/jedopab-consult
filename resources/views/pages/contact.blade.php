@extends('layouts.frontend')

@section('title', 'Contact Us | Jedopab Consult Limited')

@section('content')

<!-- 1. PAGE HEADER -->
<section class="bg-brand-navy pt-24 pb-16 border-b-4 border-brand-gold">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 tracking-tight">Get In Touch</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">Ready to transform your organization? Reach out to our team of consultants today.</p>
    </div>
</section>

<!-- 2. CONTACT LAYOUT -->
<section class="py-20 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row gap-12 bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
            
            <!-- Left Column: Contact Information -->
            <div class="lg:w-2/5 bg-brand-navy text-white p-10 lg:p-12 relative overflow-hidden">
                <!-- Decorative background elements -->
                <div class="absolute -top-24 -right-24 w-64 h-64 bg-brand-deep rounded-full opacity-20"></div>
                <div class="absolute -bottom-24 -left-24 w-64 h-64 bg-brand-gold rounded-full opacity-10"></div>
                
                <div class="relative z-10">
                    <h3 class="text-3xl font-bold mb-8">Contact Information</h3>
                    
                    <div class="space-y-8">
                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-brand-deep/50 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-1">Head Office</h4>
                                <p class="text-gray-300">5, Twin Obasa Street,<br>Gbagada, Lagos,<br>Nigeria.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-brand-deep/50 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-1">Phone</h4>
                                <p class="text-gray-300">0806 655 5802</p>
                                <p class="text-gray-300">0803 517 5743</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-12 h-12 bg-brand-deep/50 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-1">Email</h4>
                                <p class="text-gray-300">jedopabconsult@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Direct WhatsApp CTA -->
                    <div class="mt-12">
                        <a href="https://wa.me/2348066555802" target="_blank" class="inline-flex items-center justify-center w-full bg-[#25D366] text-white px-6 py-4 rounded font-bold hover:bg-[#128C7E] transition duration-300 shadow-lg">
                            <svg class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                            Chat with us on WhatsApp
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Form & Map -->
            <div class="lg:w-3/5 p-10 lg:p-12">
                <h3 class="text-3xl font-bold text-brand-navy mb-6">Send an Enquiry</h3>
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
                <form action="/contact/submit" method="POST" class="space-y-6 mb-12">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Full Name <span class="text-red-500">*</span></label>
                            <input type="text" name="name" required class="w-full bg-gray-50 border border-gray-300 rounded-md px-4 py-3 text-sm focus:ring-brand-deep focus:border-brand-deep outline-none transition shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address <span class="text-red-500">*</span></label>
                            <input type="email" name="email" required class="w-full bg-gray-50 border border-gray-300 rounded-md px-4 py-3 text-sm focus:ring-brand-deep focus:border-brand-deep outline-none transition shadow-sm">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" name="phone" class="w-full bg-gray-50 border border-gray-300 rounded-md px-4 py-3 text-sm focus:ring-brand-deep focus:border-brand-deep outline-none transition shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Organization</label>
                            <input type="text" name="organization" class="w-full bg-gray-50 border border-gray-300 rounded-md px-4 py-3 text-sm focus:ring-brand-deep focus:border-brand-deep outline-none transition shadow-sm">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Service Required</label>
                        <select name="service" class="w-full bg-gray-50 border border-gray-300 rounded-md px-4 py-3 text-sm focus:ring-brand-deep focus:border-brand-deep outline-none transition shadow-sm">
                            <option value="training">Training & Capacity Development</option>
                            <option value="consultancy">Organizational Consultancy</option>
                            <option value="project-management">Project Management</option>
                            <option value="logistics">Supply & Logistics</option>
                            <option value="other">Other Inquiry</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Message <span class="text-red-500">*</span></label>
                        <textarea name="message" rows="4" required class="w-full bg-gray-50 border border-gray-300 rounded-md px-4 py-3 text-sm focus:ring-brand-deep focus:border-brand-deep outline-none transition shadow-sm resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-brand-navy text-white px-8 py-4 rounded-md font-bold text-lg hover:bg-brand-deep transition duration-300 shadow-xl">
                        Send Message
                    </button>
                </form>

                <!-- Google Map Embed -->
                <div class="rounded-lg overflow-hidden shadow-md h-64 border border-gray-200">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.8560370830174!2d3.38555!3d6.55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8d145e656db9%3A0x6b820718501e523!2sGbagada%2C%20Lagos!5e0!3m2!1sen!2sng!4v1690000000000!5m2!1sen!2sng" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection