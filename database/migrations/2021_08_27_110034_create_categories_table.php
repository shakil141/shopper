<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name',40);
            $table->string('slug',40);
            $table->text('description')->nullable();
            $table->boolean('status')->comment('1=Active, 0=Inactive');
            $table->integer('type')->comment('1=Menu, 2=Category, 3=SubCategory');
            $table->string('menu',40)->nullable();
            $table->string('category',40)->nullable();
            $table->integer('created_by')->default(1);
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
