<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameDataTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('game_data', function(Blueprint $table)
		{
                    $table->integer('game_id');
                    $table->json('action_deck');
                    $table->json('contract_deck');
                    $table->json('station_deck');
                    $table->json('stock_deck');
                    $table->json('track_deck');
                    $table->json('train_deck');
                    $table->timestamps();
                    $table->softDeletes();
                    $table->primary('game_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('game_data');
	}

}
