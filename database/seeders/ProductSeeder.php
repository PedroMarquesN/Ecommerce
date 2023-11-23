<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title'=> 'Est aliquip ex ex incididunt commodo velit laborum culpa laboris minim et proident.',
            'price'=> 19.62,
            'quantity'=>3,
            'category_id'=> 1,
            'brand_id'=>1,
            'description'=>'Proident elit adipisicing quis occaecat pariatur sunt pariatur aute.'

        ]);
    }
}
