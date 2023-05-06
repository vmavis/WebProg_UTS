<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGreenUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('green_users', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('title2');
            $table->string('price');
            $table->string('date');
            $table->varbinary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('green_users');
    }
}
