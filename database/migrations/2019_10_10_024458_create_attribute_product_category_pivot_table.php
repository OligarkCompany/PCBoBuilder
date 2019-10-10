<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeProductCategoryPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_product_category', function (Blueprint $table) {
            $table->bigInteger('attribute_id')->unsigned()->index();
            $table->foreign('attribute_id', 'attr_fk')->references('id')->on('attributes')->onDelete('cascade');
            $table->bigInteger('product_category_id')->unsigned()->index();
            $table->foreign('product_category_id', 'pc_fk')->references('id')->on('product_categories')->onDelete('cascade');
            $table->primary(['attribute_id', 'product_category_id'], 'pc_attr_primary');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attribute_product_category');
    }
}
