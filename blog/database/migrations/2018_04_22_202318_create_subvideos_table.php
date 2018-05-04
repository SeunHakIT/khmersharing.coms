<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubvideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subvideos', function (Blueprint $table) {
           $table->increments('id')->unsigned();
            $table->string('name','100')->unique();
            $table->string('picture','255')->default('#');;
            $table->string('url','100');
            $table->unsignedInteger('videos_id');
            $table->tinyInteger('status')->default('1');
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
        Schema::dropIfExists('subvideos');
    }
}
