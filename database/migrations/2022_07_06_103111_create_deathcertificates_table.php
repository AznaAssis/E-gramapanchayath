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
        Schema::create('deathcertificates', function (Blueprint $table) {
            $table->id();
            $table->string('gpid');
            $table->string('userid');
            $table->string('name');
            $table->string('fathernname');
            $table->string('mothername');
            $table->string('dod');
            $table->longText('rcard');
            $table->longText('certificate');
            $table->string('gender');
            $table->string('applicationdate');
            $table->string('bill');
            $table->string('status')->default('pending verification');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deathcertificates');
    }
};
