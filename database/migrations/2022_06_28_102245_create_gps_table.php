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
        Schema::create('gps', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->bigInteger('phno');
            $table->string('username');
            $table->string('password');
            $table->string('state');
            $table->string('district');
            $table->string('bp');
            $table->string('taluk');
            $table->string('wards');
            $table->integer('population');
            $table->integer('schools');
            $table->integer('hospitals');
            $table->string('gpimage');
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
        Schema::dropIfExists('gps');
    }
};
