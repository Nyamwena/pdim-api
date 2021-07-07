<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class CreateProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'productName'=>'Cooking Oil',
                'productDescription'=>'Olivine Cooking oil',
                'price'=> 400.00,
                'barcode'=> '2030145',
                'qrCode' => 'cook0il',
                'category' => 'Food',
                'siUnit' => '2 Liters'

            ],
            [
                'productName'=>'Bread',
                'productDescription'=>'Lobels bread',
                'price'=> 99.00,
                'barcode'=> '20301451',
                'qrCode' => 'cook0il2',
                'category' => 'Food',
                'siUnit' => '500 grams'
            ],
        ];

        foreach ($product as $key => $value) {
            Product::create($value);
        }
    }
}
