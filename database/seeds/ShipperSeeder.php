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
        //
        DB::table('shippers')->insert([
            [
                'name'=>'ViettelPost',
                'phone'=>'0868689999',
                'address'=>'Hà Nội',
            ],
            [
                'name'=>'Giao hàng tiết kiệm',
                'phone'=>'0868689990',
                'address'=>'Hà Nội',
            ],
            [
                'name'=>'Giao hàng nhanh',
                'phone'=>'0868689992',
                'address'=>'Hà Nội',
            ],
        ]);

    }
}
