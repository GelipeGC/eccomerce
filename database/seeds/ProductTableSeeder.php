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
        		'imagePath' => 'http://darwindeveloper.com/uploads/e59854c748aa9e2c8b8ceabd9feb3028.png',
        		'title' => 'Book Laravel',
        		'description' => 'Super cool - at least as a child.',
        		'price'	=> 10
        	]);
        $product->save();

        factory(Product::class, 20)->create();
    }
}
