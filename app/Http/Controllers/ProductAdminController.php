<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductAdminController extends Controller
{
    // 1. Display the Admin Dashboard with all products
    public function index()
    {
        $products = Product::latest()->get();
        // We will create this admin view in the next step
        return view('admin.dashboard', compact('products'));
    }

    // 2. Save a new product to the database
    public function store(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg,pdf|max:2048', // 2MB Max
        ]);

        // Handle the image upload securely
        $imagePath = null;
        if ($request->hasFile('image')) {
            // Stores in storage/app/public/products
            $imagePath = $request->file('image')->store('products', 'public');
        }

        // Create the product (Price is forced to null per client request)
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => null, 
            'image_path' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Product successfully added to the website.');
    }

    // 3. Delete a product from the database
    public function destroy(Product $product)
    {
        // Delete the associated image from the server to save space
        if ($product->image_path) {
            Storage::disk('public')->delete($product->image_path);
        }

        // Delete the database record
        $product->delete();

        return redirect()->back()->with('success', 'Product successfully removed.');
    }
}