@extends('layouts.frontend')

@section('title', 'Jedopab Consult Limited | Strategic Insight, Sustainable Impact')

@section('content')

<!-- 1. HERO SECTION (LARBEC-style Image Background) -->
<section class="bg-brand-navy relative pt-32 pb-32 lg:pt-40 lg:pb-40 overflow-hidden z-10">
    <!-- The LARBEC-style Background Image Blend -->
    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Corporate Office" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
    
    <!-- Subtle Background Glow -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-brand-deep rounded-full blur-3xl opacity-30 transform translate-x-1/3 -translate-y-1/3 z-0"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 text-center lg:text-left flex flex-col lg:flex-row items-center">
        <!-- Hero Text -->
        <div class="lg:w-3/5">
            <span class="inline-block py-1 px-3 rounded-full bg-brand-deep/50 border border-brand-gold/30 text-brand-gold text-xs font-bold tracking-widest uppercase mb-6">
                Leading Consulting Firm
            </span>
            <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 leading-tight tracking-tight">
                Building Capability That <span class="text-brand-gold">Powers Progress.</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto lg:mx-0">
                We empower Government Parastatals, Corporate Bodies, and NGOs with integrated solutions in Capacity Development, Project Execution, and Logistics.
            </p>
            <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                <a href="/services" class="bg-brand-gold text-brand-navy px-8 py-4 rounded-full font-bold hover:bg-yellow-500 transition duration-300 shadow-[0_8px_30px_rgb(212,175,55,0.3)] text-lg">
                    Explore Solutions
                </a>
                <a href="/contact" class="bg-transparent border border-white/30 text-white px-8 py-4 rounded-full font-bold hover:bg-white hover:text-brand-navy transition duration-300 text-lg">
                    Partner With Us
                </a>
            </div>
        </div>
        
        <!-- Optional Hero Image (Hidden on mobile, visible on desktop) -->
        <div class="hidden lg:block lg:w-2/5 pl-12 relative">
            <div class="absolute inset-0 bg-brand-gold rounded-3xl transform translate-x-4 translate-y-4 opacity-50"></div>
            <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Corporate Team" class="rounded-3xl shadow-2xl relative z-10 w-full h-[400px] object-cover">
        </div>
    </div>
</section>

<!-- OVERLAPPING BOTTOM CARD (The "Quick Stats/Pillars") -->
<div class="relative z-30 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 -mt-16 md:-mt-24">
    <div class="bg-white rounded-3xl shadow-[0_20px_50px_rgba(10,31,68,0.1)] p-8 md:p-12 border border-gray-100 flex flex-col md:flex-row justify-between items-center gap-6 md:gap-0 divide-y md:divide-y-0 md:divide-x divide-gray-200">
        <div class="flex-1 text-center py-4 md:py-0 md:px-6 w-full">
            <h3 class="text-2xl md:text-3xl font-black text-brand-navy mb-1">Developing</h3>
            <p class="text-gray-500 font-medium text-sm md:text-base">People & Capacity</p>
        </div>
        <div class="flex-1 text-center py-4 md:py-0 md:px-6 w-full">
            <h3 class="text-2xl md:text-3xl font-black text-brand-navy mb-1">Transforming</h3>
            <p class="text-gray-500 font-medium text-sm md:text-base">Organizations & Strategy</p>
        </div>
        <div class="flex-1 text-center py-4 md:py-0 md:px-6 w-full">
            <h3 class="text-2xl md:text-3xl font-black text-brand-navy mb-1">Delivering</h3>
            <p class="text-gray-500 font-medium text-sm md:text-base">Sustainable Impact</p>
        </div>
    </div>
</div>

<!-- 2. IMAGE-BASED SERVICES SECTION -->
<!-- pt-32 provides padding to ensure the overlapping card clears safely -->
<section class="bg-slate-50 pt-32 pb-24 z-0 relative -mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-deep font-bold tracking-widest uppercase text-sm mb-2 block">Our Expertise</span>
            <h2 class="text-4xl font-extrabold text-brand-navy mb-6">Integrated solutions across the capability and infrastructure chain.</h2>
        </div>

        <!-- 4-Column Image Card Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
            
            <!-- Card 1 -->
            <a href="/services" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 flex flex-col">
                <div class="h-48 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Training" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-brand-navy/20 group-hover:bg-transparent transition duration-300"></div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-brand-navy mb-3">Training & Capacity</h3>
                    <p class="text-gray-600 text-sm mb-6 flex-grow">Equipping individuals and teams with essential leadership and behavioural competencies.</p>
                    <div class="flex items-center text-brand-gold font-bold text-sm">
                        Read More <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="/services" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 flex flex-col">
                <div class="h-48 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Consultancy" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-brand-navy/20 group-hover:bg-transparent transition duration-300"></div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-brand-navy mb-3">Organizational Consultancy</h3>
                    <p class="text-gray-600 text-sm mb-6 flex-grow">Improving processes and developing practical strategies that support sustainable growth.</p>
                    <div class="flex items-center text-brand-gold font-bold text-sm">
                        Read More <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="/services" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 flex flex-col">
                <div class="h-48 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Project Management" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-brand-navy/20 group-hover:bg-transparent transition duration-300"></div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-brand-navy mb-3">Project Management</h3>
                    <p class="text-gray-600 text-sm mb-6 flex-grow">Translating complex plans into action through efficient, accountable execution.</p>
                    <div class="flex items-center text-brand-gold font-bold text-sm">
                        Read More <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </div>
            </a>

            <!-- Card 4 -->
            <a href="/services" class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-gray-100 flex flex-col">
                <div class="h-48 overflow-hidden relative">
                    <img src="https://images.unsplash.com/photo-1580674285054-bed31e145f59?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Supply & Logistics" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-brand-navy/20 group-hover:bg-transparent transition duration-300"></div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-xl font-bold text-brand-navy mb-3">Supply & Logistics</h3>
                    <p class="text-gray-600 text-sm mb-6 flex-grow">Reliable operational solutions with an uncompromising focus on quality standards.</p>
                    <div class="flex items-center text-brand-gold font-bold text-sm">
                        Read More <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </div>
                </div>
            </a>

        </div>
        
        <div class="mt-16 text-center">
            <a href="/services" class="inline-block bg-brand-navy text-white px-8 py-3 rounded-full font-bold hover:bg-brand-deep transition shadow-lg">View All Services</a>
        </div>
    </div>
</section>

<!-- 3. HIGH-CONTRAST DARK SECTION (CEO / Impact) -->
<section class="py-24 bg-brand-navy text-white relative overflow-hidden">
    <!-- Decorative overlapping circle -->
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-brand-deep rounded-full blur-3xl opacity-20 -translate-x-1/2 -translate-y-1/2"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 flex flex-col lg:flex-row items-center gap-16">
        <div class="lg:w-1/2">
            <h2 class="text-4xl font-extrabold mb-6 leading-tight">Lead with integrity, deliver with excellence.</h2>
            <div class="w-20 h-1 bg-brand-gold mb-6"></div>
            <p class="text-xl text-gray-300 mb-8 leading-relaxed font-light">
                "In today's rapidly changing business environment, organizations need more than ideas. They need the right knowledge, capabilities, strategies, and reliable execution to achieve sustainable growth."
            </p>
            <div class="flex items-center gap-4">
                <!-- Replace with client headshot -->
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" alt="Adedotun Oluwatosin" class="w-16 h-16 rounded-full border-2 border-brand-gold object-cover">
                <div>
                    <p class="font-bold text-lg">Adedotun Oluwatosin</p>
                    <p class="text-brand-gold text-sm">CEO / Lead Consultant</p>
                </div>
            </div>
        </div>
        
        <div class="lg:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Modern Info Cards on Dark Background -->
            <div class="bg-white/5 backdrop-blur-md p-6 rounded-2xl border border-white/10 hover:bg-white/10 transition">
                <div class="w-12 h-12 bg-brand-gold/20 rounded-full flex items-center justify-center text-brand-gold mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h4 class="font-bold text-xl mb-2">Integrity First</h4>
                <p class="text-sm text-gray-400">Honesty, transparency, and ethical conduct in every engagement.</p>
            </div>
            
            <div class="bg-white/5 backdrop-blur-md p-6 rounded-2xl border border-white/10 hover:bg-white/10 transition">
                <div class="w-12 h-12 bg-brand-gold/20 rounded-full flex items-center justify-center text-brand-gold mb-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h4 class="font-bold text-xl mb-2">Sustainable Impact</h4>
                <p class="text-sm text-gray-400">Practical solutions that produce lasting improvements.</p>
            </div>
        </div>
    </div>
</section>

<!-- 4. BOTTOM LEAD CAPTURE (Full Width Call to Action) -->
<section class="py-20 bg-brand-gold">
    <div class="max-w-4xl mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-extrabold text-brand-navy mb-6">Have a procurement or project need?</h2>
        <p class="text-lg text-brand-navy/80 mb-8 font-medium">Get in touch to discuss how we can help your organization succeed.</p>
        <a href="/contact" class="inline-block bg-brand-navy text-white px-10 py-4 rounded-full font-bold text-lg hover:bg-gray-900 transition duration-300 shadow-xl hover:-translate-y-1">
            Contact Our Team
        </a>
    </div>
</section>

@endsection