<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShipperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shippers')->insert([
            [
                'name' => 'Hung',
                'phone' => '0983785181',
                'address' => 'Thai Binh'
            ],
            [
                'name' => 'Hao',
                'phone' => '0974826481',
                'address' => 'Ha Noi'
            ],
            [
                'name' => 'Vu',
                'phone' => '0997458348',
                'address' => 'TP.HCM'
            ]
        ]);
    }
}
