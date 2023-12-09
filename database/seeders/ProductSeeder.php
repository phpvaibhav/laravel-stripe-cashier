<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Product A1',
                'slug' => 'productA',
                'stripe_product' => 'price_1OLQwsSADEjyt86nQY8JSgpm',
                'price' => 10,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
            ],
            [
                'name' => 'Product B',
                'slug' => 'productB',
                'stripe_product' => 'price_1OLQxISADEjyt86nfeMsIMMl',
                'price' => 20,
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
