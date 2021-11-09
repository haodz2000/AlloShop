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
        DB::table('products')->insert([
            [
                'product_name'=>'Blazer Paris Olive',
                'slug'=>'blazer-paris-olive',
                'category_id'=>1,
                'description'=>'. Chất liệu thân thiện với môi trường, mềm mượt, thấm hút mồ hôi tốt, thoáng mát khi mặc. Phù hợp với da nhạy cảm, không bị nhăn hay co rút, có độ bền khá cao',
                'url_image'=>'blazer-paris-olive.jpg',
                'gender'=>2,
                'price'=> 46,
                'discount'=> 0
            ],
            [
                'product_name'=>'Quần baggy lưng cao milktea',
                'slug'=>'quan-baggy-lung-cao-milktea',
                'category_id'=>1,
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolores non aspernatur est praesentium necessitatibus libero minus dolorum corporis
                 ex earum totam voluptate voluptas veniam, quae molestiae distinctio alias repellendus? Quo.',
                'url_image'=>'quan-bayby-lung-cao-milktea.jpg',
                'gender'=>1,
                'price'=> 28,
                'discount'=> 0
            ],
            [
                'product_name'=>'Blazer Paris Milktea',
                'slug'=>'blazer-paris-milktea',
                'category_id'=>2,
                'description'=>'Chất liệu thân thiện với môi trường, mềm mượt, thấm hút mồ hôi tốt, thoáng mát khi mặc. Phù hợp với da nhạy cảm, không bị nhăn hay co rút, có độ bền khá cao',
                'url_image'=>'blazer-paris-milktea.jpg',
                'gender'=>3,
                'price'=> 38,
                'discount'=> 0.2
            ],
            [
                'product_name'=>'Quần tokyo đen BTS',
                'slug'=>'quan-tokyo-den-bts',
                'category_id'=>1,
                'description'=>'. Chất liệu thân thiện với môi trường, mềm mượt, thấm hút mồ hôi tốt, thoáng mát khi mặc. Phù hợp với da nhạy cảm, không bị nhăn hay co rút, có độ bền khá cao',
                'url_image'=>'quan-tokyo-den-bts.jpg',
                'gender'=>2,
                'price'=> 35,
                'discount'=> 0
            ],
            [
                'product_name'=>'Sơ mi bambo đen',
                'slug'=>'so-mi-bambo-den',
                'category_id'=>2,
                'description'=>'Lụa sồi, mịn mát, ít nhăn, chống co rút, dễ ủi, thấm hút mồ hôi tốt, thân thiện với môi trường',
                'url_image'=>'so-mi-bambo-den.jpg',
                'gender'=>2,
                'price'=> 30,
                'discount'=> 0.2
            ],
            [
                'product_name'=>'Áo polo đen',
                'slug'=>'ao-polo-den',
                'category_id'=>2,
                'description'=>'Chất liệu thân thiện với môi trường, mềm mượt, thấm hút mồ hôi tốt, thoáng mát khi mặc. Phù hợp với da nhạy cảm, không bị nhăn hay co rút, có độ bền khá cao',
                'url_image'=>'ao-polo-den.jpg',
                'gender'=>1,
                'price'=> 15,
                'discount'=> 0.2
            ],
            [
                'product_name'=>'Áo tencen trắng kem',
                'slug'=>'ao-tencen-trang-kem',
                'category_id'=>2,
                'description'=>'. Chất liệu thân thiện với môi trường, mềm mượt, thấm hút mồ hôi tốt, thoáng mát khi mặc. Phù hợp với da nhạy cảm, không bị nhăn hay co rút, có độ bền khá cao',
                'url_image'=>'ao-tencen-trang-kem.jpg',
                'gender'=>2,
                'price'=> 20,
                'discount'=> 0.2
            ],
            [
                'product_name'=>'Sơ mi lụa sồi trắng',
                'slug'=>'so-mi-lua-soi-trang',
                'category_id'=>2,
                'description'=>'Lụa sồi, mịn mát, ít nhăn, chống co rút, dễ ủi, thấm hút mồ hôi tốt, thân thiện với môi trường',
                'url_image'=>'so-mi-lua-soi-trang.jpg',
                'gender'=>3,
                'price'=> 20,
                'discount'=> 0.2
            ],
        ]);
    }
}
