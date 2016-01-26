<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trains', function(Blueprint $table)
		{
			$table->string('id', 8);
			$table->string('name');
			$table->json('power')->nullable();
			$table->json('cost')->nullable();
			$table->char('phase_letter', 1)->nullable();
			$table->boolean('worker')->default(TRUE);
			$table->json('worker_cost')->nullable();
			$table->json('supplies')->nullable();
			$table->timestamps();
			$table->primary('id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trains');
	}

}
