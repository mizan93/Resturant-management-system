<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('fb_link');
            $table->string('tw_link');
            $table->string('gplus_link');
            $table->string('ln_link');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_infos');
    }
}
