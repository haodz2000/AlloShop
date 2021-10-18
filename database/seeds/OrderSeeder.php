<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            [
                'customer_id' => '1',
                'shipper_id' => '1',
                'code_employee' => 'a01',
                'key_token' => 'abcd',
                'note' => 'hehe',
                'status' => '1',
                'address' => 'Thai Binh'
            ],
            [
                'customer_id' => '1',
                'shipper_id' => '2',
                'code_employee' => 'a02',
                'key_token' => 'efgh',
                'note' => 'hoho',
                'status' => '2',
                'address' => 'Ha Noi'
            ],
            [
                'customer_id' => '1',
                'shipper_id' => '3',
                'code_employee' => 'a03',
                'key_token' => 'jklm',
                'note' => 'hihi',
                'status' => '3',
                'address' => 'TP.HCM'
            ],
        ]);
    }
}
