<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoleUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('user_name',100);
            $table->string('phone_number');
            $table->string('user_email')->unique();
            $table->string('password');
            $table->string('confirm_password');
            $table->string('store');
            $table->string('image')->nullable();
            $table->boolean('status')->comment('0=active/1=Inactive');
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
        Schema::dropIfExists('role_users');
    }
}
