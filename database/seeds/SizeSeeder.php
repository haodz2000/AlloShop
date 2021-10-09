<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sizes')->insert([
            [
                'size'=>'S'
            ],
            [
                'size'=>'M'
            ],
            [
                'size'=>'L'
            ],
            [
                'size'=>'XL'
            ],
            [
                'size'=>'XXL'
            ]

        ]);
    }
}
