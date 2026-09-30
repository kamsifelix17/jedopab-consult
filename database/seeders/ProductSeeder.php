<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Corporate Leadership Training Manual',
            'description' => 'A comprehensive guide for developing executive leadership skills, conflict resolution, and team management within corporate organizations.',
            'price' => 25000.00,
            'image_path' => null, // Will trigger the fallback image
        ]);

        Product::create([
            'name' => 'Strategic HR Planning Template',
            'description' => 'Customizable templates and frameworks for aligning human resource strategies with long-term business objectives.',
            'price' => 15000.00,
            'image_path' => null,
        ]);

        Product::create([
            'name' => 'Operational Efficiency Audit Framework',
            'description' => 'Standard operating procedures and analytical tools for auditing and improving project execution and supply chain delivery.',
            'price' => 45000.00,
            'image_path' => null,
        ]);
    }
}