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
            // [
            //     'name' => 'Tạ Hữu Hào',
            //     'email' => 'tahuuhao1810@gmail.com',
            //     'password' => bcrypt('123456789'),
            //     'code' => '',
            //     'level'=>1,
            //     'address'=>'Vĩnh Ninh Vĩnh Quỳnh Thanh Trì Hà Nội',
            //     'phone'=>'0962534782'
            // ],
            [
                'name' => 'ADMINSTRATOR',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456789'),
                'code' => 'aywmajwisa',
                'level'=>3,
                'address'=>'Vĩnh Ninh Vĩnh Quỳnh',
                'phone'=>'0133456812',
            ],
            [
                'name' => 'ro',
                'email' => 'ro@example.com',
                'password' => bcrypt('123456789'),
                'code' => 'ronaldo',
                'level'=>1,
                'address'=>'Thanh Hoa',
                'phone'=>'0323456812'
            ],
            [
                'name' => 'vu',
                'email' => 'bb@example.com',
                'level'=>1,
                'password' => bcrypt('123456789'),
                'code' => 'eheheheh',
                'address'=>'Thanh Hoa',
                'phone'=>'0124456812'
            ],
        ]);

    }
}
