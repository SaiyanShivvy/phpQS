<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'name', 'description', 'price', 'stock', 'supplier_id', 'category_id', 'image'
        $product = new \App\Products([
           'name' => 'Maori Gift 1',
           'description' => 'This is a Maori Gift.',
           'price' => 69.99,
           'stock' => 99,
           'supplier_id' => 1,
           'category_id' => 1,
           'image' => '...'
        ]);
        $product->save();

        $product = new \App\Products([
            'name' => 'T-Shirt Item 1',
            'description' => 'This is a T-Shirt.',
            'price' => 29.99,
            'stock' => 99,
            'supplier_id' => 1,
            'category_id' => 2,
            'image' => '...'
        ]);
        $product->save();

        $product = new \App\Products([
            'name' => 'Mug Item 1',
            'description' => 'This is a Mug.',
            'price' => 19.99,
            'stock' => 99,
            'supplier_id' => 1,
            'category_id' => 3,
            'image' => '...'
        ]);
        $product->save();

        $product = new \App\Products([
            'name' => 'Pin Item 1',
            'description' => 'This is a Pin.',
            'price' => 4.99,
            'stock' => 99,
            'supplier_id' => 1,
            'category_id' => 4,
            'image' => '...'
        ]);
        $product->save();
    }
}
