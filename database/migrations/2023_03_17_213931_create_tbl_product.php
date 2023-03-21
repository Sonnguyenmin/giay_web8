<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('brand_id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->string('pro_name');
            $table->integer('pro_price');
            $table->string('feature_image')->nullable();
            $table->string('feature_image_name')->nullable();
            $table->text('pro_content');
            $table->string('slug');
            $table->integer('pro_status');
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
        Schema::dropIfExists('tbl_product');
    }
}
