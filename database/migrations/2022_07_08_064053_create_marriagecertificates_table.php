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
        Schema::create('marriagecertificates', function (Blueprint $table) {
            $table->id();
            $table->string('mtype');
            $table->string('userid');
            $table->string('gpid');
            $table->string('hphoto');
            $table->string('wphoto');
            $table->string('hname');
            $table->string('wname');
            $table->string('hrelegion');
            $table->string('wrelegion');
            $table->string('hcast');
            $table->string('wcast');
            $table->string('hage');
            $table->string('wage');
            $table->string('hoccupation');
            $table->string('woccupation');
            $table->string('hidproof');
            $table->string('widproof');
            $table->string('status')->default('pending verification');
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
        Schema::dropIfExists('marriagecertificates');
    }
};
