<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barcode');
            $table->string('name');
            $table->integer('qty');
            $table->integer('qty_limit');
            $table->double('costs');
            $table->double('price');
            $table->integer('category_id');
            $table->integer('unit_id');
            $table->string('input');
            $table->string('detail');
            $table->integer('user_id');
            $table->integer('group_id');
            $table->integer('create_id');
            $table->integer('update_id')->nullable();
            $table->string('image');
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
        Schema::dropIfExists('products');
    }
}
