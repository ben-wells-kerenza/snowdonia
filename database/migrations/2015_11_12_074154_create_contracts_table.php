<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contracts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->smallInteger('min_player')->default(1);
			$table->smallInteger('max_player')->default(5);
			$table->integer('points')->nullable();
			$table->json('requirements');
			$table->char('phase_letter', 1)->nullable();
			$table->json('power');
			$table->smallInteger('weather_id');
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
		Schema::drop('contracts');
	}

}
