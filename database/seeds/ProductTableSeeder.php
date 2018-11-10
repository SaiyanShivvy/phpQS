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
        //$faker = Faker\Factory::create();
        //'name', 'description', 'price', 'stock', 'supplier_id', 'category_id', 'image'
        $product = new \App\Products([
           'name' => 'Maori Gift 1',
           'description' => 'This is a Maori Gift.',
           'price' => 69.99,
           'stock' => 99,
           'supplier_id' => 1,
           'category_id' => 1,
           'image' => 'https://i.pinimg.com/originals/dc/42/4f/dc424f715a16dc74724859560daa48eb.jpg',
        ]);
        $product->save();

        $product = new \App\Products([
            'name' => 'T-Shirt Item 1',
            'description' => 'This is a T-Shirt.',
            'price' => 29.99,
            'stock' => 99,
            'supplier_id' => 1,
            'category_id' => 2,
            'image' => 'https://www.giftsnz.com/photogallery/tshirts/DSCN3157l.jpg',
        ]);
        $product->save();

        $product = new \App\Products([
            'name' => 'Mug Item 1',
            'description' => 'This is a Mug.',
            'price' => 19.99,
            'stock' => 99,
            'supplier_id' => 1,
            'category_id' => 3,
            'image' => 'https://images-na.ssl-images-amazon.com/images/I/51kK2dEcMLL._SX466_.jpg',
        ]);
        $product->save();

        $product = new \App\Products([
            'name' => 'Pin Item 1',
            'description' => 'This is a Pin.',
            'price' => 4.99,
            'stock' => 99,
            'supplier_id' => 1,
            'category_id' => 4,
            'image' => 'https://www.shopnz.com/public/img/site/shopnz-com/s/par-047-kiwi-and-nz-map-pinback-badge-1224361.jpg',
        ]);
        $product->save();
    }
}
