<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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

            $table->bigIncrements('id');
            $table->string('product_type');
            $table->string('product_store');
            $table->string('product_special_search',55);
            $table->string('product_name',55);
            $table->string('product_slug');
            $table->string('product_category');
            $table->string('product_sub_category',55);
            $table->string('product_brand');
            $table->string('product_purchase_price');
            $table->string('product_sale_price');
            $table->string('product_unit');
            $table->string('product_tag');
            $table->bigInteger('alert_quantity');
            $table->boolean('status')->comment('Active/InActive');
            $table->longText('product_description')->nullable();
            $table->string('seo_friendly_title',55);
            $table->longText('seo_friendly_description')->nullable();
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
