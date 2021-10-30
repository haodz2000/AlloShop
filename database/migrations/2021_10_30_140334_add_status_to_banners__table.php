<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->tinyInteger('status')->default(1)->after('url_banner'); // 1 là hiện, 0 là ko hiện
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            //
        });
    }
}
