@extends('layouts.frontend')

@section('title', 'Our Services | Jedopab Consult Limited')

@section('content')

<!-- 1. HERO SECTION -->
<section class="bg-brand-navy pt-32 pb-24 border-b-4 border-brand-gold relative overflow-hidden">
    <!-- The LARBEC-style Background Image Blend -->
    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Business Services" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
    
    <div class="max-w-7xl mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight">Our Services</h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto font-light">
            Providing integrated solutions across the supply and infrastructure chain to help businesses build capability and execute effectively.
        </p>
    </div>
</section>

<!-- 2. OVERLAPPING SERVICE BLOCKS -->
<section class="py-24 bg-slate-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-32">

        <!-- Service 1: Training (Image Left, Card Overlaps Right) -->
        <div id="training" class="flex flex-col lg:block relative scroll-mt-32">
            <!-- Image -->
            <div class="w-full lg:w-3/4 h-[400px] lg:h-[500px]">
                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Training" class="w-full h-full object-cover rounded-3xl shadow-xl">
            </div>
            <!-- Overlapping Content Card -->
            <div class="w-full lg:w-1/2 bg-white rounded-3xl shadow-[0_20px_50px_rgba(10,31,68,0.1)] p-8 md:p-12 -mt-20 lg:mt-0 relative lg:absolute lg:right-0 lg:top-1/2 lg:-translate-y-1/2 border border-gray-100 z-10 mx-4 lg:mx-0 lg:max-w-none max-w-[calc(100%-2rem)]">
                <div class="w-14 h-14 bg-brand-light text-brand-gold rounded-2xl flex items-center justify-center mb-6">
                    <span class="font-black text-2xl">01</span>
                </div>
                <h3 class="text-3xl font-extrabold text-brand-navy mb-4">Training & Capacity Development</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    We bridge the gap between knowledge and performance. We equip individuals and teams with the essential mindset and skills required to perform in a rapidly changing environment.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-brand-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 font-medium">Leadership and supervisory development</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-brand-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 font-medium">Soft skills and behavioural competencies</span>
                    </li>
                </ul>
                <a href="/contact" class="inline-block bg-brand-navy text-white px-8 py-3 rounded-full font-bold hover:bg-brand-deep transition shadow-lg">Request Training</a>
            </div>
        </div>

        <!-- Service 2: Consultancy (Image Right, Card Overlaps Left) -->
        <div id="consultancy" class="flex flex-col lg:block relative scroll-mt-32">
            <!-- Image -->
            <div class="w-full lg:w-3/4 h-[400px] lg:h-[500px] lg:ml-auto">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Consultancy" class="w-full h-full object-cover rounded-3xl shadow-xl">
            </div>
            <!-- Overlapping Content Card -->
            <div class="w-full lg:w-1/2 bg-white rounded-3xl shadow-[0_20px_50px_rgba(10,31,68,0.1)] p-8 md:p-12 -mt-20 lg:mt-0 relative lg:absolute lg:left-0 lg:top-1/2 lg:-translate-y-1/2 border border-gray-100 z-10 mx-4 lg:mx-0 lg:max-w-none max-w-[calc(100%-2rem)]">
                <div class="w-14 h-14 bg-brand-light text-brand-gold rounded-2xl flex items-center justify-center mb-6">
                    <span class="font-black text-2xl">02</span>
                </div>
                <h3 class="text-3xl font-extrabold text-brand-navy mb-4">Organizational Consultancy</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Moving organizations from their current state to desired outcomes. We combine industry knowledge and practical implementation to strengthen your strategies, systems, and structures.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-brand-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 font-medium">Management and business consultancy</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-brand-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 font-medium">HR consulting & strategic planning</span>
                    </li>
                </ul>
                <a href="/contact" class="inline-block bg-brand-navy text-white px-8 py-3 rounded-full font-bold hover:bg-brand-deep transition shadow-lg">Consult With Us</a>
            </div>
        </div>

        <!-- Service 3: Project Management (Image Left, Card Overlaps Right) -->
        <div id="project-management" class="flex flex-col lg:block relative scroll-mt-32">
            <div class="w-full lg:w-3/4 h-[400px] lg:h-[500px]">
                <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Project Management" class="w-full h-full object-cover rounded-3xl shadow-xl">
            </div>
            <div class="w-full lg:w-1/2 bg-white rounded-3xl shadow-[0_20px_50px_rgba(10,31,68,0.1)] p-8 md:p-12 -mt-20 lg:mt-0 relative lg:absolute lg:right-0 lg:top-1/2 lg:-translate-y-1/2 border border-gray-100 z-10 mx-4 lg:mx-0 lg:max-w-none max-w-[calc(100%-2rem)]">
                <div class="w-14 h-14 bg-brand-light text-brand-gold rounded-2xl flex items-center justify-center mb-6">
                    <span class="font-black text-2xl">03</span>
                </div>
                <h3 class="text-3xl font-extrabold text-brand-navy mb-4">Project Management</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    We support clients in translating plans and requirements into efficient execution. Our approach ensures that every phase of your project is handled with precision.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-brand-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 font-medium">Professional accountability and reporting</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-brand-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 font-medium">High operational efficiency</span>
                    </li>
                </ul>
                <a href="/contact" class="inline-block bg-brand-navy text-white px-8 py-3 rounded-full font-bold hover:bg-brand-deep transition shadow-lg">Manage Your Project</a>
            </div>
        </div>

        <!-- Service 4: Supply & Logistics (Image Right, Card Overlaps Left) -->
        <div id="logistics" class="flex flex-col lg:block relative scroll-mt-32">
            <div class="w-full lg:w-3/4 h-[400px] lg:h-[500px] lg:ml-auto">
                <img src="https://images.unsplash.com/photo-1580674285054-bed31e145f59?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Supply and Logistics" class="w-full h-full object-cover rounded-3xl shadow-xl">
            </div>
            <div class="w-full lg:w-1/2 bg-white rounded-3xl shadow-[0_20px_50px_rgba(10,31,68,0.1)] p-8 md:p-12 -mt-20 lg:mt-0 relative lg:absolute lg:left-0 lg:top-1/2 lg:-translate-y-1/2 border border-gray-100 z-10 mx-4 lg:mx-0 lg:max-w-none max-w-[calc(100%-2rem)]">
                <div class="w-14 h-14 bg-brand-light text-brand-gold rounded-2xl flex items-center justify-center mb-6">
                    <span class="font-black text-2xl">04</span>
                </div>
                <h3 class="text-3xl font-extrabold text-brand-navy mb-4">Supply & Logistics</h3>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Reliable operational solutions for businesses that demand excellence. We deliver supplies and manage logistics chains with a strict focus on creating lasting value.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-brand-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 font-medium">Uncompromised quality standards</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-brand-gold mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        <span class="text-gray-700 font-medium">Timely delivery and execution</span>
                    </li>
                </ul>
                <a href="/contact" class="inline-block bg-brand-navy text-white px-8 py-3 rounded-full font-bold hover:bg-brand-deep transition shadow-lg">Request Logistics</a>
            </div>
        </div>

    </div>
</section>

<!-- 3. BOTTOM LEAD CAPTURE (Full Width Call to Action) -->
<section class="py-20 bg-brand-gold">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold text-brand-navy mb-6">Not sure which service you need?</h2>
        <p class="text-lg text-brand-navy/80 mb-8 font-medium">Get in touch to discuss how we can build a strategic framework tailored to your specific needs.</p>
        <a href="/contact" class="inline-block bg-brand-navy text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-gray-900 transition duration-300 shadow-xl hover:-translate-y-1">
            Talk to our Team
        </a>
    </div>
</section>

@endsection