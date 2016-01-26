<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stations', function (Blueprint $table) {
            $table->increments('id');
			$table->float('position');
            $table->string('name');
			$table->smallInteger('min_player')->default(1);
			$table->smallInteger('max_player')->default(5);
            $table->integer('track')->default(0);
            $table->integer('points')->nullable();
            $table->json('spaces')->nullable();
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
        Schema::drop('stations');
    }
}
