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
        for($i = 1 ;$i<9 ;$i++){
            for($j = 1; $j<4;$j++){
                for($z = 1; $z < 6; $z++){
                    DB::table('product_details')->insert([
                        'product_id'=>$i,
                        'color_id'=>$j,
                        'size_id'=>$z,
                        'quantity'=>$i*100+$j*10+$z,
                        'sku'=>'#'.$i.$j.$z
                    ]);
                }
            }
        }
    }
}
