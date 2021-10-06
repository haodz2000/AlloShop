<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [
                'category_name'=>'Quần',
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolores non aspernatur est praesentium necessitatibus libero minus dolorum corporis
                 ex earum totam voluptate voluptas veniam, quae molestiae distinctio alias repellendus? Quo.
                '
            ],
            [
                'category_name'=>'Áo',
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolores non aspernatur est praesentium necessitatibus libero minus dolorum corporis
                 ex earum totam voluptate voluptas veniam, quae molestiae distinctio alias repellendus? Quo.
                '
            ],
            [
                'category_name'=>'Váy',
                'description'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Dolores non aspernatur est praesentium necessitatibus libero minus dolorum corporis
                 ex earum totam voluptate voluptas veniam, quae molestiae distinctio alias repellendus? Quo.
                '
            ]
        ]);
    }
}
