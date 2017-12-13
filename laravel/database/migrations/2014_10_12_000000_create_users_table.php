<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bs_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_01');
            $table->string('name_02');
            $table->string('address_01');
            $table->tinyInteger('address_02');
            $table->string('phone', 50);
            $table->string('email')->unique();
            $table->string('password');
            $table->tinyInteger('level');
            $table->tinyInteger('rank');
            $table->tinyInteger('active')->default(0);
            $table->tinyInteger('del_flg')->default(0);
            $table->rememberToken();
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
        Schema::dropIfExists('bs_users');
    }
}
