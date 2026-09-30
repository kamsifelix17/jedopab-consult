<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Handle Product Purchase Form
        if ($request->has('product_name')) {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'receipt' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048', // Max 2MB
            ]);

            // Save the uploaded receipt to storage/app/public/receipts
            $receiptPath = $request->file('receipt')->store('receipts', 'public');

            // TODO: In a production environment, you would save this transaction to the database here.

            return redirect()->back()->with('success', 'Payment confirmation submitted successfully! Our team will verify your receipt and send the product shortly.');
        }

        // 2. Handle General Contact Form
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // TODO: In a production environment, you would save this message to the database here.

        return redirect()->back()->with('success', 'Your inquiry has been sent successfully. A consultant will get back to you shortly.');
    }
}