<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product & Material Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            <!-- Success Message Alert -->
            @if (session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded shadow-sm mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- ADD NEW PRODUCT FORM -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 border-b border-gray-200 bg-gray-50">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Add New Product</h3>
                    
                    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Product Name <span class="text-red-500">*</span></label>
                                <input type="text" name="name" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Product Image (Optional)</label>
                                <input type="file" name="image" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 transition border border-gray-300 rounded-md bg-white">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Description <span class="text-red-500">*</span></label>
                            <textarea name="description" rows="3" required class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
                        </div>

                        <button type="submit" class="bg-gray-800 text-white px-6 py-2 rounded-md font-bold hover:bg-gray-700 transition">
                            Save Product to Website
                        </button>
                    </form>
                </div>
            </div>

            <!-- CURRENT PRODUCTS TABLE -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">Currently Live Products</h3>
                    
                    @if($products->count() > 0)
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 border">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Added On</th>
                                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($products as $product)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                @if($product->image_path)
                                                    <img src="{{ asset('storage/' . $product->image_path) }}" class="h-12 w-12 object-cover rounded shadow-sm">
                                                @else
                                                    <div class="h-12 w-12 bg-gray-200 rounded flex items-center justify-center text-gray-400 text-xs text-center leading-tight">No Img</div>
                                                @endif
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $product->name }}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                {{ $product->created_at->format('M d, Y') }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 font-bold bg-red-50 px-3 py-1 rounded">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p class="text-gray-500 italic">No products currently active on the website.</p>
                    @endif
                </div>
            </div>

        </div>
    </div>
</x-app-layout>