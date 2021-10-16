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
                'password' => '123456',
                'code' => 'vu15082002'
            ],
            [
                'name' => 'tu',
                'email' => 'tu@example.com',
                'password' => '111111',
                'code' => 'tu03112002'
            ],
            [
                'name' => 'ro',
                'email' => 'ro@example.com',
                'password' => '222222',
                'code' => 'ronaldo'
            ],
            [
                'name' => 'vu',
                'email' => 'bb@example.com',
                'password' => '333333',
                'code' => 'eheheheh'
            ],
            [
                'name' => 'vu',
                'email' => 'aa@example.com',
                'password' => '444444',
                'code' => 'abcddd'
            ]

        ]);

    }
}
