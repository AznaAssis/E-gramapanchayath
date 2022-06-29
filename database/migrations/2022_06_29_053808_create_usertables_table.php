<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usertables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->bigInteger('phno');
            $table->string('username');
            $table->string('password');
            $table->string('gender');
            $table->string('nationality');
            $table->integer('age');
            $table->string('yob');
            $table->string('state');
            $table->string('district');
            $table->string('panchayth');
            $table->string('housename');
            $table->string('streetaddress');
            $table->string('pfname');
            $table->integer('pincode');
            $table->integer('wards');
            $table->string('job');
            $table->string('marital_status');
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
        Schema::dropIfExists('usertables');
    }
};
