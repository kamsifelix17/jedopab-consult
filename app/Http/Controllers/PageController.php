<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        return view('pages.services');
    }

    public function products() {
        // Fetches all products from the database to display on the page
        $products = Product::all();
        return view('pages.products', compact('products'));
    }

    public function contact() {
        return view('pages.contact');
    }
}