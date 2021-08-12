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
            $table->enum('product_type', ['In Stock Space', 'Pre Order']);
            $table->enum('product_store', ['Blue 40', 'Pre Order']);
            $table->string('product_special_search',55);
            $table->string('product_name',55);
            $table->string('product_slug');
            $table->string('product_category');
            $table->string('product_sub_category',55);
            $table->enum('product_brand',['Blue 40','Expert Items']);
            $table->decimal('product_purchase_price');
            $table->decimal('product_sale_price');
            $table->enum('[product_unit',['Color & Size','Color','Size','Pc(s)']);
            $table->string('product_tag');
            $table->bigInteger('alert_quantity');
            $table->boolean('product_status')->comment('Active/InActive');
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
