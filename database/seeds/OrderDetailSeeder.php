<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
            [
                'order_id' => '1',
                'product_id' => '1',
                'price' => '20',
                'quantity' => '3',
                'size' => 'X',
                'color' => 'vang',
                'total_price' => '60',
                'sku' => 'hic',
            ],
            [
                'order_id' => '2',
                'product_id' => '2',
                'price' => '20',
                'quantity' => '3',
                'size' => 'L',
                'color' => 'xanh',
                'total_price' => '60',
                'sku' => 'hic',
            ],
            [
                'order_id' => '3',
                'product_id' => '4',
                'price' => '20',
                'quantity' => '4',
                'size' => 'XL',
                'color' => 'den',
                'total_price' => '80',
                'sku' => 'hic',
            ],
        ]);
    }
}
