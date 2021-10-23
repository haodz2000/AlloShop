<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'vu',
                'email' => 'vu@example.com',
                'password' => bcrypt('123456789'),
                'code' => 'vu15082002',
                'address'=>'Thanh Hoa',
                'phone'=>'0123456812'

            ],
            [
                'name' => 'tu',
                'email' => 'tu@example.com',
                'password' => bcrypt('123456789'),
                'code' => 'tu03112002',
                'address'=>'Thanh Hoa',
                'phone'=>'0133456812',

            ],
            [
                'name' => 'ro',
                'email' => 'ro@example.com',
                'password' => bcrypt('123456789'),
                'code' => 'ronaldo',
                'address'=>'Thanh Hoa',
                'phone'=>'0323456812'
            ],
            [
                'name' => 'vu',
                'email' => 'bb@example.com',

                'password' => bcrypt('123456789'),
                'code' => 'eheheheh',
                'address'=>'Thanh Hoa',
                'phone'=>'0124456812'
            ],
            [
                'name' => 'vu',
                'email' => 'aa@example.com',
                'password' => bcrypt('123456789'),
                'code' => 'abcddd',
                'address'=>'Thanh Hoa',
                'phone'=>'0123452812'

            ]
        ]);

    }
}
