<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //'name', 'address'. 'contact_number', 'email',
        $supplier = new \App\Suppliers([
            'name' => 'Aotearoa Gift',
            'address' => '36 Queens Parade, Devonport, North Shore',
            'contact_number' => 4452943,
            'email' => 'support@aotearoa.co.nz'

        ]);
        $supplier->save();
    }
}
