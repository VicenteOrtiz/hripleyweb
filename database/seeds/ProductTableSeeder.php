<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product([
        	'sku' => '2000373859395',
        	'description' => 'POLE DAY INX NAC',
        	'price' => '16990',
        ]);

        $product->save();

        $second_product = new Product([
        	'sku' => '2000373859432',
        	'description' => 'POLE DAY INX NAC',
        	'price' => '16990',
        ]);

        $second_product->save();
    }
}
