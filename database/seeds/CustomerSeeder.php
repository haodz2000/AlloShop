<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name' => 'Vu',
                'phone' => '113',
                'email' => 'vu@gmail.com',
                'gender' => '1',
                'address' => 'Ha Noi',
            ],
            [
                'name' => 'Hao',
                'phone' => '115',
                'email' => 'hao@gmail.com',
                'gender' => '1',
                'address' => 'TP.HCM',
            ],
        ]);
    }
}
