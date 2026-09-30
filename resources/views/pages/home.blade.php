@extends('layouts.frontend')

@section('title', 'Jedopab Consult Limited | Strategic Insight, Sustainable Impact')

@section('content')

<!-- 1. HERO SECTION (Video Background with Sound Toggle) -->
<section class="relative h-screen min-h-[600px] flex items-center justify-center overflow-hidden">
    <!-- Video Background (Replace src with actual client video later) -->
    <video id="heroVideo" autoplay loop muted playsinline class="absolute z-0 w-auto min-w-full min-h-full max-w-none object-cover">
        <!-- Placeholder video link for development -->
        <source src="https://assets.mixkit.co/videos/preview/mixkit-business-people-walking-in-a-modern-office-building-42721-large.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- Dark Overlay for Text Readability -->
    <div class="absolute z-10 inset-0 bg-brand-navy/80"></div>

    <!-- Hero Content -->
    <div class="relative z-20 text-center px-4 max-w-5xl mx-auto mt-16">
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight tracking-tight">
            Strategic Insight, <span class="text-brand-gold">Sustainable Impact</span>
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-3xl mx-auto">
            Empowering Government Parastatals, Corporate Bodies, and NGOs with integrated solutions in Training, Consultancy, Project Management, and Logistics.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/services" class="bg-brand-gold text-brand-navy px-8 py-3 rounded-md font-bold hover:bg-yellow-500 transition duration-300 shadow-lg text-lg">
                Explore Our Services
            </a>
            <a href="/contact" class="bg-transparent border border-white text-white px-8 py-3 rounded-md font-bold hover:bg-white hover:text-brand-navy transition duration-300 text-lg">
                Partner With Us
            </a>
        </div>
    </div>

    <!-- Custom Sound Toggle Button -->
    <button id="muteToggle" class="absolute z-30 bottom-10 right-10 bg-black/50 hover:bg-black/80 text-white p-3 rounded-full backdrop-blur-sm transition duration-300 border border-white/20">
        <svg id="muteIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <!-- Default: Muted Icon -->
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" clip-rule="evenodd"></path>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2"></path>
        </svg>
    </button>
</section>

<!-- 2. VALUE PROPOSITION SECTION -->
<section class="py-20 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-brand-navy mb-4">Our Core Pillars</h2>
            <div class="w-24 h-1 bg-brand-gold mx-auto"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Pillar 1 -->
            <div class="bg-white p-8 rounded-lg shadow-md border-t-4 border-brand-deep hover:-translate-y-2 transition duration-300">
                <div class="w-14 h-14 bg-brand-navy text-brand-gold rounded-full flex items-center justify-center mb-6 text-2xl">
                    <!-- Icon placeholder -->
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-brand-navy mb-3">Developing People</h3>
                <p class="text-gray-600">Equipping individuals and teams with the knowledge, competencies, and mindset required to perform effectively and bridge the gap between learning and workplace results.</p>
            </div>

            <!-- Pillar 2 -->
            <div class="bg-white p-8 rounded-lg shadow-md border-t-4 border-brand-deep hover:-translate-y-2 transition duration-300">
                <div class="w-14 h-14 bg-brand-navy text-brand-gold rounded-full flex items-center justify-center mb-6 text-2xl">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-brand-navy mb-3">Transforming Organizations</h3>
                <p class="text-gray-600">Identifying challenges, improving processes, and developing practical strategies that support sustainable growth and respond effectively to changing business realities.</p>
            </div>

            <!-- Pillar 3 -->
            <div class="bg-white p-8 rounded-lg shadow-md border-t-4 border-brand-deep hover:-translate-y-2 transition duration-300">
                <div class="w-14 h-14 bg-brand-navy text-brand-gold rounded-full flex items-center justify-center mb-6 text-2xl">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-brand-navy mb-3">Delivering Impact</h3>
                <p class="text-gray-600">Supporting clients in translating plans into action through efficient execution, ensuring quality, cost-effectiveness, and professional accountability.</p>
            </div>
        </div>
    </div>
</section>

<!-- 3. MINI ABOUT SECTION (CEO Message) -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center gap-12">
        <div class="lg:w-1/2">
            <div class="bg-brand-light rounded-lg p-2 h-96 relative overflow-hidden shadow-lg border border-gray-200">
                <!-- Replace with an actual image of the CEO or Corporate Building later -->
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Corporate Professional" class="w-full h-full object-cover rounded">
                <div class="absolute bottom-0 left-0 right-0 bg-brand-navy/90 text-white p-4 backdrop-blur-sm">
                    <p class="font-bold text-lg">Adedotun Oluwatosin</p>
                    <p class="text-sm text-brand-gold">BSc, MSc, SPHRi, FIMC, FITD, ACIPM</p>
                    <p class="text-xs text-gray-300">Chief Executive Officer / Lead Consultant</p>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2">
            <span class="text-brand-deep font-bold tracking-wider uppercase text-sm">Message From The CEO</span>
            <h2 class="text-3xl font-bold text-brand-navy mt-2 mb-6">Turning Knowledge Into Capability</h2>
            <p class="text-gray-600 mb-4 leading-relaxed">
                "Welcome to Jedopab Consult Limited. In today's rapidly changing business environment, organizations need more than ideas—they need the right knowledge, capabilities, strategies, and reliable execution to achieve sustainable growth."
            </p>
            <p class="text-gray-600 mb-8 leading-relaxed">
                "As we grow, our ambition is to build a trusted brand with local relevance and global standards, creating meaningful impact through people development, organizational transformation, and effective service delivery."
            </p>
            <a href="/about" class="inline-flex items-center text-brand-navy font-bold hover:text-brand-deep transition duration-300 group">
                Read Full Profile 
                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </div>
</section>

<!-- 4. TRUST INDICATORS (Target Audience Grid) -->
<section class="py-16 bg-brand-navy text-white border-y border-brand-deep">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <p class="text-brand-gold font-semibold uppercase tracking-widest text-sm mb-8">Trusted By & Tailored For</p>
        <div class="flex flex-wrap justify-center items-center gap-8 md:gap-16 opacity-80">
            <div class="flex items-center space-x-2">
                <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                <span class="font-bold text-lg">Government Parastatals</span>
            </div>
            <div class="flex items-center space-x-2">
                <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                <span class="font-bold text-lg">Corporate Bodies</span>
            </div>
            <div class="flex items-center space-x-2">
                <svg class="w-6 h-6 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span class="font-bold text-lg">Non-Governmental Organizations</span>
            </div>
        </div>
    </div>
</section>

<!-- 5. CLOSING CTA -->
<section class="py-24 bg-brand-light relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute -top-24 -right-24 w-96 h-96 bg-brand-deep rounded-full opacity-5"></div>
    <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-brand-navy rounded-full opacity-5"></div>
    
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
        <h2 class="text-4xl font-bold text-brand-navy mb-6">Ready to Accelerate Your Organization's Growth?</h2>
        <p class="text-lg text-gray-600 mb-10">Partner with us for integrated people, organizational, project, and operational solutions designed to achieve sustainable results.</p>
        <a href="/contact" class="inline-block bg-brand-navy text-white px-10 py-4 rounded-md font-bold text-lg hover:bg-brand-deep transition duration-300 shadow-xl hover:-translate-y-1">
            Schedule a Consultation
        </a>
    </div>
</section>

<!-- JavaScript for Video Audio Toggle -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('heroVideo');
        const muteBtn = document.getElementById('muteToggle');
        const muteIcon = document.getElementById('muteIcon');

        muteBtn.addEventListener('click', function() {
            if(video.muted) {
                // Turn sound ON
                video.muted = false;
                muteIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5 10v4a2 2 0 002 2h2.586l3.707 3.707A.996.996 0 0015 19V5a.996.996 0 00-1.707-.707L7.586 10H7a2 2 0 00-2 2z"></path>`;
            } else {
                // Turn sound OFF (Muted)
                video.muted = true;
                muteIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z" clip-rule="evenodd"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2"></path>`;
            }
        });
    });
</script>

@endsection