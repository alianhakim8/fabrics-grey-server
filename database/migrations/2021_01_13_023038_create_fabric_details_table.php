<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFabricDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fabric_details', function (Blueprint $table) {
            $table->id();
            $table->integer('qty');
            $table->integer('oil_dirty');
            $table->integer('slub');
            $table->integer('hole_small');
            $table->integer('hole_big');
            $table->integer('yarn_broken');
            $table->integer('description');
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
        Schema::dropIfExists('fabric_details');
    }
}
