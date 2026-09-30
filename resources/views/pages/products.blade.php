@extends('layouts.frontend')

@section('title', 'Products | Jedopab Consult Limited')

@section('content')

<section class="bg-brand-navy pt-24 pb-16 border-b-4 border-brand-gold">
    <div class="max-w-7xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4 tracking-tight">Our Products & Materials</h1>
        <p class="text-lg text-gray-300 max-w-2xl mx-auto">Explore our premium training materials, strategic templates, and operational resources.</p>
    </div>
</section>

<section class="py-20 bg-brand-light min-h-[500px]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
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
        
        @if(isset($products) && $products->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($products as $product)
                <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition duration-300 flex flex-col group">
                    
                    <div class="relative h-48 overflow-hidden bg-gray-200">
                        @if($product->image_path)
                            <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        @else
                            <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Resource Placeholder" class="w-full h-full object-cover group-hover:scale-105 transition duration-500 opacity-80">
                        @endif
                        <div class="absolute inset-0 bg-brand-navy/10 group-hover:bg-transparent transition duration-300"></div>
                    </div>

                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold text-brand-navy mb-2 line-clamp-1">{{ $product->name }}</h3>
                        <p class="text-gray-600 text-sm mb-6 flex-grow line-clamp-3">
                            {{ $product->description }}
                        </p>
                        
                        <div class="flex items-center justify-end mt-auto pt-4 border-t border-gray-100">
                            <button 
                                onclick="openCheckoutModal('{{ addslashes($product->name) }}')" 
                                class="bg-brand-gold text-brand-navy px-6 py-2 rounded font-bold text-sm hover:bg-yellow-500 transition duration-300 shadow-sm w-full">
                                Inquire / Purchase
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-20 bg-white rounded-xl border border-dashed border-gray-300">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                <h3 class="text-2xl font-bold text-gray-500 mb-2">No Products Available</h3>
                <p class="text-gray-400">Products added to the database will appear here automatically.</p>
            </div>
        @endif
    </div>
</section>

<!-- CHECKOUT MODAL -->
<div id="checkoutModal" class="fixed inset-0 z-50 hidden bg-brand-navy/80 backdrop-blur-sm flex items-center justify-center p-4 opacity-0 transition-opacity duration-300">
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl overflow-hidden transform scale-95 transition-transform duration-300" id="modalContent">
        
        <div class="bg-brand-navy px-6 py-4 flex justify-between items-center border-b-4 border-brand-gold">
            <h3 class="text-xl font-bold text-white">Complete Your Request</h3>
            <button onclick="closeCheckoutModal()" class="text-gray-300 hover:text-white transition">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <div class="p-6 md:p-8 flex flex-col md:flex-row gap-8">
            <div class="md:w-1/2 bg-brand-light p-6 rounded-lg border border-gray-200">
                <h4 class="font-bold text-brand-navy mb-4 text-lg">Bank Transfer Details</h4>
                <p class="text-sm text-gray-600 mb-4">Please make your payment to the corporate account below to finalize your request.</p>
                
                <div class="space-y-3 text-sm">
                    <div>
                        <p class="text-gray-500 text-xs uppercase tracking-wider">Bank Name</p>
                        <p class="font-bold text-gray-800">[Insert Bank Name]</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-xs uppercase tracking-wider">Account Name</p>
                        <p class="font-bold text-gray-800">Jedopab Consult Limited</p>
                    </div>
                    <div>
                        <p class="text-gray-500 text-xs uppercase tracking-wider">Account Number</p>
                        <p class="font-bold text-gray-800 text-lg tracking-widest">[0000000000]</p>
                    </div>
                </div>
            </div>

            <div class="md:w-1/2">
                <h4 class="font-bold text-brand-navy mb-4 text-lg">Confirm Payment</h4>
                <form action="/contact/submit" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <input type="hidden" name="product_name" id="modalProductNameInput">
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Selected Product</label>
                        <input type="text" id="modalProductNameDisplay" readonly class="w-full bg-gray-100 border border-gray-300 rounded px-3 py-2 text-sm text-gray-600 focus:outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Your Full Name</label>
                        <input type="text" name="name" required class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:ring-brand-deep focus:border-brand-deep outline-none transition">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Upload Receipt</label>
                        <input type="file" name="receipt" required accept="image/*,.pdf" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-brand-light file:text-brand-navy hover:file:bg-gray-200 transition">
                    </div>
                    
                    <button type="submit" class="w-full bg-brand-navy text-white font-bold rounded py-3 hover:bg-brand-deep transition shadow-md mt-2">
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