<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_details')->insert([
            [
                'product_id'=>1,
                'color_id' =>1,
                'size_id' =>1,
                'quantity'=>100,
                'sku'=>'#111'
            ],
            [
                'product_id'=>2,
                'color_id' =>2,
                'size_id' =>2,
                'quantity'=>100,
                'sku'=>'#222'
            ],
            [
                'product_id'=>3,
                'color_id' =>1,
                'size_id' =>3,
                'quantity'=>100,
                'sku'=>'#313'
            ],
            [
                'product_id'=>4,
                'color_id' =>2,
                'size_id' =>4,
                'quantity'=>100,
                'sku'=>'#424'
            ],
            [
                'product_id'=>5,
                'color_id' =>1,
                'size_id' =>4,
                'quantity'=>100,
                'sku'=>'#514'
            ],
            [
                'product_id'=>6,
                'color_id' =>2,
                'size_id' =>1,
                'quantity'=>100,
                'sku'=>'#621'
            ],
            [
                'product_id'=>7,
                'color_id' =>3,
                'size_id' =>3,
                'quantity'=>100,
                'sku'=>'#733'
            ],
            // [
            //     'product_id'=>8,
            //     'color_id' =>1,
            //     'size_id' =>4,
            //     'quantity'=>100,
            //     'sku'=>'#814',
            // ],
        ]);
    }
}
