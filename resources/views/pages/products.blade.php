@extends('layouts.frontend')

@section('title', 'Products | Jedopab Consult Limited')

@section('content')

<!-- 1. HERO SECTION (LARBEC-style Image Background) -->
<section class="relative bg-brand-navy pt-32 pb-40 border-b-4 border-brand-gold overflow-hidden">
    <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Products Library" class="absolute inset-0 w-full h-full object-cover mix-blend-overlay opacity-30">
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-6xl font-extrabold text-white mb-6 tracking-tight">Our Products & Materials</h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto font-light">
            Explore our premium training materials, strategic templates, and operational resources.
        </p>
    </div>
</section>

<!-- 2. DYNAMIC PRODUCT GRID -->
<section class="py-24 bg-slate-50 min-h-[500px]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        @if (session('success'))
            <div id="auto-dismiss-alert" class="mb-12 bg-green-50 border-l-4 border-green-500 p-4 rounded-r-md shadow-sm flex items-center justify-between transition-opacity duration-500">
                <div class="flex items-center">
                    <i class="bi bi-check-circle-fill text-green-500 mr-3 text-xl"></i>
                    <p class="text-green-700 font-bold">{{ session('success') }}</p>
                </div>
                <button onclick="this.parentElement.style.display='none'" class="text-green-500 hover:text-green-700 text-xl">
                    <i class="bi bi-x"></i>
                </button>
            </div>
        @endif

        @if(isset($products) && $products->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($products as $product)
                <div class="bg-white rounded-3xl shadow-md overflow-hidden border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition duration-300 flex flex-col group">
                    
                    <div class="relative h-56 overflow-hidden bg-gray-100">
                        @if($product->image_path)
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
                        @else
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Resource Placeholder" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 opacity-80">
                        @endif
                        <div class="absolute inset-0 bg-brand-navy/10 group-hover:bg-transparent transition duration-300"></div>
                    </div>

                    <div class="p-8 flex flex-col flex-grow">
                        <h3 class="text-xl font-extrabold text-brand-navy mb-3 line-clamp-2 leading-tight">{{ $product->name }}</h3>
                        <p class="text-gray-500 text-sm mb-8 flex-grow line-clamp-3 leading-relaxed">
                            {{ $product->description }}
                        </p>
                        
                        <div class="mt-auto">
                            <button 
                                onclick="openCheckoutModal('{{ addslashes($product->name) }}')" 
                                class="w-full bg-brand-navy text-brand-gold px-6 py-4 rounded-full font-bold hover:bg-brand-deep hover:text-white transition duration-300 shadow-md flex justify-center items-center">
                                Inquire / Purchase
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-20 bg-white rounded-3xl shadow-sm border border-gray-100">
                <svg class="w-20 h-20 text-gray-200 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                <h3 class="text-2xl font-extrabold text-brand-navy mb-2">No Products Available</h3>
                <p class="text-gray-500 font-medium">Products added to the database will appear here automatically.</p>
            </div>
        @endif
    </div>
</section>

<!-- 3. CHECKOUT MODAL (Responsive Scroll Fix) -->
<div id="checkoutModal" class="fixed inset-0 z-50 hidden bg-brand-navy/90 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
    <!-- Added max-h-[90vh] and overflow-y-auto to allow internal scrolling on mobile -->
    <div class="bg-white rounded-3xl shadow-2xl w-full max-w-4xl max-h-[90vh] overflow-y-auto transform scale-95 transition-transform duration-300 relative" id="modalContent">
        
        <!-- Close Button -->
        <button onclick="closeCheckoutModal()" class="absolute top-4 right-4 text-gray-500 hover:text-brand-navy transition z-20 bg-gray-100 hover:bg-gray-200 rounded-full w-8 h-8 flex items-center justify-center">
            <i class="bi bi-x-lg"></i>
        </button>

        <div class="flex flex-col md:flex-row h-full">
            <!-- Left: Bank Details -->
            <div class="md:w-5/12 bg-slate-50 p-8 md:p-12 border-b md:border-b-0 md:border-r border-gray-100 flex flex-col justify-center">
                <div class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center text-brand-navy mb-6 shadow-sm text-2xl">
                    <i class="bi bi-bank2"></i>
                </div>
                <h4 class="font-extrabold text-brand-navy mb-4 text-2xl">Bank Transfer</h4>
                <p class="text-sm text-gray-500 mb-8 leading-relaxed font-medium">Make your payment to the corporate account below. Once transferred, upload the receipt to finalize your request.</p>
                
                <div class="space-y-6 bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <div>
                        <p class="text-gray-400 text-xs font-bold uppercase tracking-wider mb-1">Bank Name</p>
                        <p class="font-bold text-gray-800 text-lg">[Insert Bank Name]</p>
                    </div>
                    <div>
                        <p class="text-gray-400 text-xs font-bold uppercase tracking-wider mb-1">Account Name</p>
                        <p class="font-bold text-gray-800 text-lg">Jedopab Consult Limited</p>
                    </div>
                    <div>
                        <p class="text-gray-400 text-xs font-bold uppercase tracking-wider mb-1">Account Number</p>
                        <p class="font-extrabold text-brand-deep text-2xl tracking-widest">[0000000000]</p>
                    </div>
                </div>
            </div>

            <!-- Right: Form -->
            <div class="md:w-7/12 p-10 md:p-12 flex flex-col justify-center">
                <h4 class="font-extrabold text-brand-navy mb-6 text-2xl">Confirm Payment</h4>
                <form action="/contact/submit" method="POST" enctype="multipart/form-data" class="space-y-5">
                    @csrf
                    <input type="hidden" name="product_name" id="modalProductNameInput">
                    
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Selected Product</label>
                        <input type="text" id="modalProductNameDisplay" readonly class="w-full bg-slate-100 border-transparent rounded-2xl px-5 py-4 text-sm text-gray-600 focus:outline-none cursor-not-allowed font-medium">
                    </div>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Full Name</label>
                            <input type="text" name="name" required class="w-full bg-slate-50 border-transparent rounded-2xl px-5 py-4 text-sm focus:bg-white focus:ring-2 focus:ring-brand-navy transition shadow-sm outline-none">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-gray-700 mb-2">Email Address</label>
                            <input type="email" name="email" required class="w-full bg-slate-50 border-transparent rounded-2xl px-5 py-4 text-sm focus:bg-white focus:ring-2 focus:ring-brand-navy transition shadow-sm outline-none">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2">Upload Receipt</label>
                        <input type="file" name="receipt" required accept="image/*,.pdf" class="w-full bg-slate-50 rounded-2xl border-transparent p-2 text-sm text-gray-500 file:mr-4 file:py-3 file:px-6 file:rounded-xl file:border-0 file:text-sm file:font-bold file:bg-brand-navy file:text-brand-gold hover:file:bg-brand-deep transition shadow-sm">
                    </div>
                    
                    <button type="submit" class="w-full bg-brand-gold text-brand-navy font-extrabold rounded-full py-4 mt-4 hover:bg-yellow-500 transition shadow-[0_8px_20px_rgb(212,175,55,0.3)]">
                        Submit Confirmation
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const modal = document.getElementById('checkoutModal');
    const modalContent = document.getElementById('modalContent');
    const productNameInput = document.getElementById('modalProductNameInput');
    const productNameDisplay = document.getElementById('modalProductNameDisplay');

    function openCheckoutModal(productName) {
        productNameDisplay.value = productName;
        productNameInput.value = productName;
        
        modal.classList.remove('hidden');
        setTimeout(() => {
            modal.classList.remove('opacity-0');
            modalContent.classList.remove('scale-95');
        }, 10);
    }

    function closeCheckoutModal() {
        modal.classList.add('opacity-0');
        modalContent.classList.add('scale-95');
        setTimeout(() => {
            modal.classList.add('hidden');
        }, 300);
    }

    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeCheckoutModal();
        }
    });
</script>
@endsection