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
            $table->enum('Product_Type', ['In Stock Space', 'Pre Order']);
            $table->enum('Product_Store', ['Blue 40', 'Pre Order']);
            $table->string('Product_Special_Search',55);
            $table->string('Product_Name',55);
            $table->string('Product_Slug');
            $table->string('product_category');
            $table->string('product_sub_category',55);
            $table->enum('Product_Brand',['Blue 40','Expert Items']);
            $table->decimal('Product_Purchase_Price');
            $table->decimal('Product_Sale_Price');
            $table->enum('Product_Unit',['Color & Size','Color','Size','Pc(s)']);
            $table->string('Product_Tag');
            $table->bigInteger('Alert_Quantity');
            $table->boolean('Product_Status')->comment('Active/InActive');
            $table->longText('Product_Description')->nullable();
            $table->string('Seo_Friendly_Title',55);
            $table->longText('Seo_Friendly_Description')->nullable();
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
