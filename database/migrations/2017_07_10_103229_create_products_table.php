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
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->integer('subcat_id')->unsigned();
            $table->foreign('subcat_id')->references('id')->on('categories');
            $table->integer('childcat_id')->unsigned();
            $table->foreign('childcat_id')->references('id')->on('categories');
            $table->string('product_name');
            $table->text('short_desc');
            $table->longText('description');
            $table->string('image');
            $table->float('price',12,2);
            $table->float('sale_price',12,2);
            $table->enum('is_feature',['Yes','No']);
            $table->enum('is_special',['Yes','No']);
            $table->enum('is_hot',['Yes','No']);
            $table->enum('status',['Active','Inactive']);
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
