@extends('layouts.frontend')

@section('title', 'Our Services | Jedopab Consult Limited')

@section('content')

<!-- 1. HEADER (Minimalist Deep Blue Banner) -->
<section class="bg-brand-navy pt-24 pb-16 border-b-4 border-brand-gold">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 tracking-tight">Our Services</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">Integrated solutions designed to help businesses and institutions build capability, improve performance, and execute effectively.</p>
    </div>
</section>

<!-- 2. SERVICE BLOCKS (Alternating Layout) -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-24">

        <!-- Service 1: Training & Capacity Development (Image Left, Text Right) -->
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2 relative">
                <div class="absolute inset-0 bg-brand-deep rounded-lg translate-x-4 translate-y-4 -z-10"></div>
                <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Training and Capacity Development" class="rounded-lg shadow-xl w-full h-80 object-cover">
            </div>
            <div class="md:w-1/2">
                <div class="w-12 h-12 bg-brand-light text-brand-navy rounded-full flex items-center justify-center mb-4 border border-brand-gold">
                    <span class="font-bold text-xl">01</span>
                </div>
                <h2 class="text-3xl font-bold text-brand-navy mb-4">Training & Capacity Development</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    We bridge the gap between knowledge and performance, ensuring learning translates into workplace results. We equip individuals and teams with the essential mindset to perform in a rapidly changing environment.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-brand-gold mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Leadership and supervisory development
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-brand-gold mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Soft skills and behavioural competencies
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-brand-gold mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Customized corporate training
                    </li>
                </ul>
            </div>
        </div>

        <!-- Service 2: Consultancy (Text Left, Image Right) -->
        <div class="flex flex-col md:flex-row-reverse items-center gap-12">
            <div class="md:w-1/2 relative">
                <div class="absolute inset-0 bg-brand-gold rounded-lg -translate-x-4 translate-y-4 -z-10"></div>
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Consultancy Services" class="rounded-lg shadow-xl w-full h-80 object-cover">
            </div>
            <div class="md:w-1/2">
                <div class="w-12 h-12 bg-brand-light text-brand-navy rounded-full flex items-center justify-center mb-4 border border-brand-gold">
                    <span class="font-bold text-xl">02</span>
                </div>
                <h2 class="text-3xl font-bold text-brand-navy mb-4">Organizational Consultancy</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Moving organizations from their current state to desired outcomes. We combine industry knowledge and practical implementation to strengthen your strategies, systems, and structures.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-brand-gold mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Management and business consultancy
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-brand-gold mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Human Resource consulting & strategic planning
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-brand-gold mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Business process improvement
                    </li>
                </ul>
            </div>
        </div>

        <!-- Service 3: Project Management (Image Left, Text Right) -->
        <div class="flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2 relative">
                <div class="absolute inset-0 bg-brand-deep rounded-lg translate-x-4 translate-y-4 -z-10"></div>
                <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Project Management" class="rounded-lg shadow-xl w-full h-80 object-cover">
            </div>
            <div class="md:w-1/2">
                <div class="w-12 h-12 bg-brand-light text-brand-navy rounded-full flex items-center justify-center mb-4 border border-brand-gold">
                    <span class="font-bold text-xl">03</span>
                </div>
                <h2 class="text-3xl font-bold text-brand-navy mb-4">Project Management</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    We support clients in translating plans and requirements into efficient execution. Our approach ensures that every phase of your project is handled with precision and professional accountability.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-brand-gold mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Professional accountability and reporting
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-brand-gold mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        High operational efficiency
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-brand-gold mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Measurable and sustainable results
                    </li>
                </ul>
            </div>
        </div>

        <!-- Service 4: Supply & Logistics (Text Left, Image Right) -->
        <div class="flex flex-col md:flex-row-reverse items-center gap-12">
            <div class="md:w-1/2 relative">
                <div class="absolute inset-0 bg-brand-gold rounded-lg -translate-x-4 translate-y-4 -z-10"></div>
                <img src="https://images.unsplash.com/photo-1580674285054-bed31e145f59?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Supply and Logistics" class="rounded-lg shadow-xl w-full h-80 object-cover">
            </div>
            <div class="md:w-1/2">
                <div class="w-12 h-12 bg-brand-light text-brand-navy rounded-full flex items-center justify-center mb-4 border border-brand-gold">
                    <span class="font-bold text-xl">04</span>
                </div>
                <h2 class="text-3xl font-bold text-brand-navy mb-4">Supply & Logistics</h2>
                <p class="text-gray-600 mb-6 leading-relaxed">
                    Reliable operational solutions for businesses that demand excellence. We deliver supplies and manage logistics chains with a strict focus on creating lasting value and client satisfaction.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-brand-gold mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Uncompromised quality standards
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-brand-gold mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Cost-effective operational strategies
                    </li>
                    <li class="flex items-center text-gray-700">
                        <svg class="w-5 h-5 text-brand-gold mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        Timely delivery and execution
                    </li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- 3. BOTTOM LEAD CAPTURE -->
<section class="py-16 bg-brand-deep text-center px-4">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold text-white mb-6">Need a customized solution for your organization?</h2>
        <p class="text-gray-200 mb-8 text-lg">Let our team of experts analyze your challenges and build a strategic framework tailored to your specific needs.</p>
        <a href="/contact" class="inline-block bg-brand-gold text-brand-navy px-8 py-4 rounded font-bold hover:bg-white hover:text-brand-deep transition duration-300 shadow-xl text-lg">
            Discuss Your Requirements
        </a>
    </div>
</section>

@endsection