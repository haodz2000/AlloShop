<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CodeDiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('code_discounts')->insert([
            [
                'code' => 'c01',
                'discount' => '0.5',
                'status' => '0',
            ],
            [
                'code' => 'c02',
                'discount' => '0.6',
                'status' => '1',
            ],
            [
                'code' => 'c03',
                'discount' => '0.7',
                'status' => '0',
            ],
            [
                'code' => 'c04',
                'discount' => '0.4',
                'status' => '2',
            ],
            [
                'code' => 'c05',
                'discount' => '0.2',
                'status' => '0',
            ],
        ]);
    }
}
