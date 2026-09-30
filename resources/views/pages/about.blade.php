@extends('layouts.frontend')

@section('title', 'About Us | Jedopab Consult Limited')

@section('content')

<!-- 1. HEADER (Hero Banner) -->
<section class="relative h-[400px] flex items-center justify-center bg-brand-navy overflow-hidden">
    <!-- Background Image with Overlay -->
    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Jedopab Office" class="absolute inset-0 w-full h-full object-cover opacity-30 mix-blend-overlay">
    
    <div class="relative z-10 text-center px-4">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">About Jedopab Consult</h1>
        <div class="w-24 h-1 bg-brand-gold mx-auto mb-4"></div>
        <p class="text-xl text-gray-200 max-w-2xl mx-auto">Developing People, Transforming Organizations, and Delivering Impact.</p>
    </div>
</section>

<!-- 2. MISSION & VISION (Side-by-Side) -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Vision -->
            <div class="bg-brand-light p-10 rounded-xl border-l-4 border-brand-gold shadow-sm hover:shadow-md transition duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-brand-navy rounded-full flex items-center justify-center text-brand-gold mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h2 class="text-3xl font-bold text-brand-navy">Our Vision</h2>
                </div>
                <p class="text-gray-700 text-lg leading-relaxed">
                    "To become a globally trusted consulting and service solutions company, renowned for developing people, transforming organizations, and delivering sustainable impact."
                </p>
            </div>

            <!-- Mission -->
            <div class="bg-brand-light p-10 rounded-xl border-l-4 border-brand-gold shadow-sm hover:shadow-md transition duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-brand-navy rounded-full flex items-center justify-center text-brand-gold mr-4">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h2 class="text-3xl font-bold text-brand-navy">Our Mission</h2>
                </div>
                <p class="text-gray-700 text-lg leading-relaxed">
                    "To empower individuals, organizations, and businesses through innovative training, professional consultancy, effective project management, and reliable supply and logistics solutions that create measurable and sustainable value."
                </p>
            </div>
        </div>
    </div>
</section>

<!-- 3. CORE VALUES (10-Item Grid) -->
<section class="py-20 bg-brand-navy text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold mb-4">Our Core Values</h2>
            <div class="w-24 h-1 bg-brand-gold mx-auto"></div>
            <p class="mt-4 text-gray-300 max-w-3xl mx-auto">The principles that guide our engagements, ensuring sustainable value with global relevance.</p>
        </div>

        <!-- 5-Column Grid on Large Screens, 2 on Small -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- 1. Integrity -->
            <div class="bg-brand-deep/30 p-6 rounded-lg text-center border border-white/10 hover:border-brand-gold hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 mx-auto text-brand-gold mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <h3 class="font-bold">Integrity</h3>
            </div>
            <!-- 2. Excellence -->
            <div class="bg-brand-deep/30 p-6 rounded-lg text-center border border-white/10 hover:border-brand-gold hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 mx-auto text-brand-gold mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                <h3 class="font-bold">Excellence</h3>
            </div>
            <!-- 3. Innovation -->
            <div class="bg-brand-deep/30 p-6 rounded-lg text-center border border-white/10 hover:border-brand-gold hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 mx-auto text-brand-gold mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                <h3 class="font-bold">Innovation</h3>
            </div>
            <!-- 4. Client-Centricity -->
            <div class="bg-brand-deep/30 p-6 rounded-lg text-center border border-white/10 hover:border-brand-gold hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 mx-auto text-brand-gold mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                <h3 class="font-bold">Client-Centricity</h3>
            </div>
            <!-- 5. Continuous Learning -->
            <div class="bg-brand-deep/30 p-6 rounded-lg text-center border border-white/10 hover:border-brand-gold hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 mx-auto text-brand-gold mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                <h3 class="font-bold text-sm">Continuous Learning</h3>
            </div>
            <!-- 6. Impact -->
            <div class="bg-brand-deep/30 p-6 rounded-lg text-center border border-white/10 hover:border-brand-gold hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 mx-auto text-brand-gold mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                <h3 class="font-bold">Impact</h3>
            </div>
            <!-- 7. Professionalism -->
            <div class="bg-brand-deep/30 p-6 rounded-lg text-center border border-white/10 hover:border-brand-gold hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 mx-auto text-brand-gold mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <h3 class="font-bold text-sm">Professionalism</h3>
            </div>
            <!-- 8. Collaboration -->
            <div class="bg-brand-deep/30 p-6 rounded-lg text-center border border-white/10 hover:border-brand-gold hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 mx-auto text-brand-gold mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                <h3 class="font-bold text-sm">Collaboration</h3>
            </div>
            <!-- 9. Global Mindset -->
            <div class="bg-brand-deep/30 p-6 rounded-lg text-center border border-white/10 hover:border-brand-gold hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 mx-auto text-brand-gold mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="font-bold text-sm">Global Mindset</h3>
            </div>
            <!-- 10. Sustainability -->
            <div class="bg-brand-deep/30 p-6 rounded-lg text-center border border-white/10 hover:border-brand-gold hover:-translate-y-1 transition duration-300">
                <svg class="w-10 h-10 mx-auto text-brand-gold mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                <h3 class="font-bold text-sm">Sustainability</h3>
            </div>
        </div>
    </div>
</section>

<!-- 4. LEADERSHIP PROFILE -->
<section class="py-24 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
            <!-- Image Side -->
            <div class="lg:w-2/5 h-96 lg:h-auto relative">
                <!-- Replace with exact client headshot later -->
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Adedotun Oluwatosin" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-brand-navy via-transparent to-transparent opacity-80 lg:hidden"></div>
            </div>
            
            <!-- Content Side -->
            <div class="lg:w-3/5 p-10 lg:p-16 flex flex-col justify-center">
                <span class="text-brand-gold font-bold tracking-widest uppercase text-sm mb-2">Lead Consultant</span>
                <h2 class="text-3xl md:text-4xl font-bold text-brand-navy mb-2">Adedotun Oluwatosin</h2>
                
                <div class="flex flex-wrap gap-2 mb-8">
                    <span class="bg-brand-deep text-white text-xs font-bold px-3 py-1 rounded-full">BSc</span>
                    <span class="bg-brand-deep text-white text-xs font-bold px-3 py-1 rounded-full">MSc</span>
                    <span class="bg-brand-deep text-white text-xs font-bold px-3 py-1 rounded-full">SPHRi</span>
                    <span class="bg-brand-deep text-white text-xs font-bold px-3 py-1 rounded-full">FIMC</span>
                    <span class="bg-brand-deep text-white text-xs font-bold px-3 py-1 rounded-full">FITD</span>
                    <span class="bg-brand-deep text-white text-xs font-bold px-3 py-1 rounded-full">ACIPM</span>
                </div>

                <div class="prose prose-lg text-gray-600 mb-8">
                    <p>
                        As the Chief Executive Officer of Jedopab Consult Limited, Adedotun Oluwatosin leads the firm's strategic vision. With extensive qualifications spanning multiple disciplines—including Senior Professional in Human Resources International (SPHRi) and fellowships with leading management institutes—he drives the organization's commitment to excellence.
                    </p>
                    <p>
                        His expertise forms the foundation of our ability to develop people, strengthen strategies, and execute projects that create lasting economic, organizational, and social value.
                    </p>
                </div>
                
                <div>
                    <a href="/contact" class="inline-flex items-center text-brand-navy font-bold border-b-2 border-brand-gold pb-1 hover:text-brand-deep transition duration-300">
                        Connect with our Leadership 
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection