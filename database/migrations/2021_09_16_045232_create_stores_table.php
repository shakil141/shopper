<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('store_name');
            $table->text('store_address')->nullable();
            $table->string('contact_person')->nullable();
            $table->string('contact_no');
            $table->longText('weekend')->nullable();
            $table->string('open_hour')->nullable();
            $table->string('close_hour')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1=Active,0=Inactive');
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
        Schema::dropIfExists('stores');
    }
}
