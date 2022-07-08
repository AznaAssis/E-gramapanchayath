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
        Schema::create('birthcertificates', function (Blueprint $table) {
            $table->id();
            $table->string('gpid');
            $table->string('userid');
            $table->string('childnname');
            $table->string('fathernname');
            $table->string('mothername');
            $table->string('dob');
            $table->longText('permenantaddress');
            $table->longText('currentaddress');
            $table->string('gender');
            $table->string('birthplace');
            $table->string('applicationdate');
            $table->string('bill');
            $table->string('status');
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
        Schema::dropIfExists('birthcertificates');
    }
};
