<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'product_name'=>'Quần thể thao frestyle',
                'slug'=>'Quan-the-thao-freestyle',
                'category_id '=>1,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolores non aspernatur est praesentium necessitatibus libero minus dolorum corporis
                 ex earum totam voluptate voluptas veniam, quae molestiae distinctio alias repellendus? Quo.',
                'url_image'=>'1.jpg',
                'gender'=>3,
                'price'=> 30,
                'discount'=> 0.2
            ],
            [
                'product_name'=>'Quần Tây Âu 1996',
                'slug'=>'Quan-tay-au-1996',
                'category_id'=>2,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolores non aspernatur est praesentium necessitatibus libero minus dolorum corporis
                 ex earum totam voluptate voluptas veniam, quae molestiae distinctio alias repellendus? Quo.',
                'url_image'=>'2.jpg',
                'gender'=>3,
                'price'=> 30,
                'discount'=> 0.2
            ],
            [
                'product_name'=>'Quần jean nam dạo phố mùa hè',
                'slug'=>'Quan-jean-nam-dao-pho-mua-he',
                'category_id '=>2,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolores non aspernatur est praesentium necessitatibus libero minus dolorum corporis
                 ex earum totam voluptate voluptas veniam, quae molestiae distinctio alias repellendus? Quo.',
                'url_image'=>'3.jpg',
                'gender'=>1,
                'price'=> 30,
                'discount'=> 0.2
            ],
            [
                'product_name'=>'Váy ngắn dạo phố nữ tính',
                'slug'=>'Vay-ngan-dao-pho-nu-tinh',
                'category_id '=>3,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolores non aspernatur est praesentium necessitatibus libero minus dolorum corporis
                 ex earum totam voluptate voluptas veniam, quae molestiae distinctio alias repellendus? Quo.',
                'url_image'=>'4.jpg',
                'gender'=>2,
                'price'=> 30,
                'discount'=> 0.2
            ],
            [
                'product_name'=>'Đầm dự tiệc frestyle',
                'slug'=>'Dam-du-tiec-freestyle',
                'category_id '=>1,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolores non aspernatur est praesentium necessitatibus libero minus dolorum corporis
                 ex earum totam voluptate voluptas veniam, quae molestiae distinctio alias repellendus? Quo.',
                'url_image'=>'5.jpg',
                'gender'=>2,
                'price'=> 30,
                'discount'=> 0.2
            ],
            [
                'product_name'=>'Aó phông thể thao frestyle',
                'slug'=>'ao-phong-the-thao-freestyle',
                'category_id '=>1,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolores non aspernatur est praesentium necessitatibus libero minus dolorum corporis
                 ex earum totam voluptate voluptas veniam, quae molestiae distinctio alias repellendus? Quo.',
                'url_image'=>'6.jpg',
                'gender'=>1,
                'price'=> 30,
                'discount'=> 0.2
            ],
            [
                'product_name'=>'Quần thể thao tập gym',
                'slug'=>'Quan-the-thao-tap-gym',
                'category_id '=>1,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolores non aspernatur est praesentium necessitatibus libero minus dolorum corporis
                 ex earum totam voluptate voluptas veniam, quae molestiae distinctio alias repellendus? Quo.',
                'url_image'=>'7.jpg',
                'gender'=>3,
                'price'=> 30,
                'discount'=> 0.2
            ],
            [
                'product_name'=>'Quần đùi chạy bộ',
                'slug'=>'Quan-dui-chay-bo',
                'category_id '=>1,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolores non aspernatur est praesentium necessitatibus libero minus dolorum corporis
                 ex earum totam voluptate voluptas veniam, quae molestiae distinctio alias repellendus? Quo.',
                'url_image'=>'8.jpg',
                'gender'=>3,
                'price'=> 30,
                'discount'=> 0.2
            ],
        ]);
    }
}
