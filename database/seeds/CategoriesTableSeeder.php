<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'name', 'description',
        $category = new \App\Categories([
            'name' => 'Maori Gifts',
            'description' => 'Traditional Gifts that come from the heart of NZ and its native culture.',
        ]);
        $category->save();

        $category = new \App\Categories([
            'name' => 'T-Shirts',
            'description' => 'Wear NZ.',
        ]);
        $category->save();

        $category = new \App\Categories([
            'name' => 'Mugs',
            'description' => 'For those who like to drink.',
        ]);
        $category->save();

        $category = new \App\Categories([
            'name' => 'Pins',
            'description' => 'Represent NZ without going overboard.',
        ]);
        $category->save();
    }
}
