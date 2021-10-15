<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'name' => 'IT+ banner',
                'url_banner' => '1.jpg',
            ],
            [
                'name' => 'AlloShop banner',
                'url_banner' => '2.jpg',
            ],
            [
                'name' => 'Shopee banner',
                'url_banner' => '3.PNG',
            ],
            [
                'name' => 'Win11 banner',
                'url_banner' => '4.jpg',
            ],
        ]);
    }
}
