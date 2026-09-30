@extends('layouts.frontend')

@section('title', 'About Us | Jedopab Consult Limited')

@section('content')

<!-- 1. HERO SECTION -->
<section class="bg-brand-navy pt-32 pb-24 border-b-4 border-brand-gold relative overflow-hidden">
    <!-- The LARBEC-style Background Image Blend -->
    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Consulting Team" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
    
    <!-- Abstract subtle glow -->
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-deep rounded-full blur-[100px] opacity-20 -translate-y-1/2 translate-x-1/3 z-0"></div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight">About Jedopab Consult</h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto font-light">
            A trusted partner for organizations seeking sustainable growth through capability building, strategy, and execution.
        </p>
    </div>
</section>

<!-- 2. LEADERSHIP & INTRO (Overlapping Layout) -->
<section class="bg-slate-50 pt-20 pb-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-0 lg:relative">
            
            <!-- Image Side -->
            <div class="w-full lg:w-3/5 lg:relative z-10">
                <div class="rounded-3xl overflow-hidden shadow-2xl relative">
                    <!-- Replace with actual client headshot -->
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Adedotun Oluwatosin" class="w-full h-[500px] object-cover">
                    <!-- Modern Name Tag Overlay -->
                    <div class="absolute bottom-6 left-6 bg-white/90 backdrop-blur-md px-6 py-4 rounded-2xl shadow-lg border border-white/20">
                        <p class="font-bold text-brand-navy text-lg">Adedotun Oluwatosin</p>
                        <p class="text-brand-gold text-sm font-bold">CEO / Lead Consultant</p>
                    </div>
                </div>
            </div>

            <!-- Overlapping Text Box -->
            <div class="w-full lg:w-1/2 lg:absolute lg:right-0 lg:top-1/2 lg:-translate-y-1/2 z-20">
                <div class="bg-white p-10 md:p-14 rounded-3xl shadow-[0_20px_50px_rgba(10,31,68,0.1)] border border-gray-100">
                    <span class="text-brand-deep font-bold tracking-widest uppercase text-sm mb-4 block">Our Foundation</span>
                    <h2 class="text-3xl md:text-4xl font-extrabold text-brand-navy mb-6 leading-tight">Built around reliability, professionalism, and value creation.</h2>
                    
                    <div class="space-y-4 text-gray-600 mb-8 leading-relaxed">
                        <p>
                            As the Chief Executive Officer, Adedotun Oluwatosin leads our strategic vision. With extensive qualifications spanning multiple disciplines—including <strong class="text-gray-800">BSc, MSc, SPHRi, FIMC, FITD, and ACIPM</strong>—he drives the organization's commitment to excellence.
                        </p>
                        <p>
                            Our ambition extends beyond delivering services. We seek to create measurable and sustainable impact by developing people, transforming organizations, strengthening businesses, and contributing to economic and social development.
                        </p>
                    </div>
                    
                    <a href="/contact" class="inline-flex items-center font-bold text-brand-navy hover:text-brand-gold transition duration-300 uppercase tracking-wide text-sm group">
                        Connect with us 
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 3. VISION & MISSION (High-Contrast Dark Mode) -->
<section class="py-24 bg-brand-navy text-white relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16">
            <span class="text-brand-gold font-bold tracking-widest uppercase text-sm mb-2 block">Our Direction</span>
            <h2 class="text-4xl font-extrabold">Where we're going and how we get there.</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Vision Card -->
            <div class="bg-white/5 backdrop-blur-lg p-10 rounded-3xl border border-white/10 hover:bg-white/10 transition duration-300">
                <div class="w-14 h-14 bg-brand-gold text-brand-navy rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Our Vision</h3>
                <p class="text-gray-300 text-lg leading-relaxed font-light">
                    To become a globally trusted consulting and service solutions company, renowned for developing people, transforming organizations, and delivering sustainable impact.
                </p>
            </div>

            <!-- Mission Card -->
            <div class="bg-white/5 backdrop-blur-lg p-10 rounded-3xl border border-white/10 hover:bg-white/10 transition duration-300">
                <div class="w-14 h-14 bg-brand-gold text-brand-navy rounded-2xl flex items-center justify-center mb-6 shadow-lg">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Our Mission</h3>
                <p class="text-gray-300 text-lg leading-relaxed font-light">
                    To empower individuals, organizations, and businesses through innovative training, professional consultancy, effective project management, and reliable supply and logistics solutions.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 4. CORE VALUES (Modern Rounded Grid) -->
<section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-extrabold text-brand-navy mb-4">Our Core Values</h2>
            <p class="text-lg text-gray-500 max-w-2xl mx-auto">The principles that ensure we create sustainable value with global relevance.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $values = [
                    ['title' => 'Integrity', 'desc' => 'Honesty, transparency, ethical conduct, and accountability.'],
                    ['title' => 'Excellence', 'desc' => 'The highest standards in all our service delivery.'],
                    ['title' => 'Innovation', 'desc' => 'Embracing technology and creative approaches.'],
                    ['title' => 'Client-Centricity', 'desc' => 'Solutions that create measurable value for clients.'],
                    ['title' => 'Continuous Learning', 'desc' => 'Promoting lifelong learning and capacity building.'],
                    ['title' => 'Impact', 'desc' => 'Practical solutions producing sustainable improvements.'],
                    ['title' => 'Professionalism', 'desc' => 'Competence, reliability, and responsibility.'],
                    ['title' => 'Collaboration', 'desc' => 'Teamwork and diverse perspectives create stronger solutions.'],
                    ['title' => 'Global Mindset', 'desc' => 'Applying international standards to local realities.'],
                ];
            @endphp

            @foreach($values as $index => $value)
            <div class="bg-slate-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl hover:bg-white hover:border-brand-gold/30 transition-all duration-300 group">
                <div class="flex items-center mb-4">
                    <span class="text-brand-gold font-black text-2xl mr-4 opacity-50 group-hover:opacity-100 transition">0{{ $index + 1 }}</span>
                    <h3 class="text-xl font-bold text-brand-navy">{{ $value['title'] }}</h3>
                </div>
                <p class="text-gray-600 text-sm leading-relaxed">{{ $value['desc'] }}</p>
            </div>
            @endforeach
            
            <!-- 10th Value (Sustainability) styling to fill the grid nicely -->
            <div class="bg-brand-navy rounded-2xl p-8 shadow-lg hover:-translate-y-1 transition-all duration-300 lg:col-span-3 flex flex-col sm:flex-row items-center justify-between text-white border border-brand-deep">
                <div>
                    <div class="flex items-center mb-2">
                        <span class="text-brand-gold font-black text-2xl mr-4">10</span>
                        <h3 class="text-2xl font-bold">Sustainability</h3>
                    </div>
                    <p class="text-gray-300">We pursue solutions that create lasting economic, organizational, social, and human value.</p>
                </div>
                <a href="/contact" class="mt-6 sm:mt-0 bg-brand-gold text-brand-navy px-6 py-3 rounded-full font-bold hover:bg-yellow-500 whitespace-nowrap shadow-lg transition">Partner with us</a>
            </div>
        </div>
    </div>
</section>

@endsection