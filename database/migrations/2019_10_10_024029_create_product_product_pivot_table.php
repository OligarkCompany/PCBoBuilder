<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductProductPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_compatibility', function (Blueprint $table) {
            $table->bigInteger('product_one_id')->unsigned()->index();
            $table->foreign('product_one_id')->references('id')->on('products')->onDelete('cascade');
            $table->bigInteger('product_two_id')->unsigned()->index();
            $table->foreign('product_two_id')->references('id')->on('products')->onDelete('cascade');
            $table->primary(['product_one_id', 'product_two_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_product');
    }
}
