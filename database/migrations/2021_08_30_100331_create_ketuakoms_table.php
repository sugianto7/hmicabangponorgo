<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKetuakomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketuakoms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nama_ketua');
            $table->string('web');
            $table->string('wa');
            $table->string('ig');
            $table->string('fb');
            $table->string('image')->nullable();
            $table->bigInteger('komisariat_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('komisariat_id')->references('id')->on('komisariats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ketuakoms');
    }
}
