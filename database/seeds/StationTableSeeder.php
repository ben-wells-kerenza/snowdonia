<?php

use App\ORM\Station;
use Illuminate\Database\Seeder;

class StationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Station::unguard();
		Station::create([
			'id' => 1,
			'position' => 0,
			'name' => 'Llanberis',
			'points' => 0,
		]);
		Station::create([
			'id' => 2,
			'position' => 1,
			'name' => 'Two Viaducts',
			'track' => 2,
			'points' => 1,
			'spaces' => [
				Station::EXCAVATE => [
					[
	                	'requirements' => [
							'resource' => 'RUBBLE',
							'amount' => 4,
						],
						'points' => 4,
					],
					[
	                	'requirements' => [
							'resource' => 'RUBBLE',
							'amount' => 2,
						],
						'points' => 2,
					],
				],
				Station::BUILD => [
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 4,
						],
						'points' => 9,
					],
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 3,
						],
						'points' => 7,
					],
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 2,
						],
						'points' => 4,
					],
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 1,
						],
						'points' => 1,
					],
				],
			],
		]);
		Station::create([
			'id' => 3,
			'position' => 2,
			'name' => 'Waterfall Station',
			'min_player' => 3,
			'max_player' => 5,
			'track' => 1,
			'points' => 2,
			'spaces' => [
				Station::EXCAVATE => [
					[
	                	'requirements' => [
							'resource' => 'RUBBLE',
							'amount' => 2,
						],
						'points' => 3,
					],
				],
				Station::BUILD => [
					[
	                	'requirements' => [
							'resource' => 'STEEL',
							'amount' => 1,
						],
						'points' => 7,
					],
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 2,
						],
						'points' => 4,
					],
				],
			],
		]);
		Station::create([
			'id' => 4,
			'position' => 3,
			'name' => 'Hebron Station',
			'track' => 2,
			'points' => 4,
			'spaces' => [
				Station::EXCAVATE => [
					[
	                	'requirements' => [
							'resource' => 'RUBBLE',
							'amount' => 2,
						],
						'points' => 3,
					],
				],
				Station::BUILD => [
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 3,
						],
						'points' => 6,
					],
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 3,
						],
						'points' => 7,
					],
					[
	                	'requirements' => [
							'resource' => 'STEEL',
							'amount' => 1,
						],
						'points' => 7,
					],
					[
	                	'requirements' => [
							'resource' => 'STEEL',
							'amount' => 1,
						],
						'points' => 5,
					],
				],
			],
		]);
		Station::create([
			'id' => 5,
			'position' => 4,
			'name' => 'Halfway Station',
			'track' => 2,
			'points' => 7,
			'spaces' => [
				Station::EXCAVATE => [
					[
	                	'requirements' => [
							'resource' => 'RUBBLE',
							'amount' => 2,
						],
						'points' => 3,
					],
					[
	                	'requirements' => [
							'resource' => 'RUBBLE',
							'amount' => 2,
						],
						'points' => 2,
					],
				],
				Station::BUILD => [
					[
	                	'requirements' => [
							'resource' => 'STEEL',
							'amount' => 1,
						],
						'points' => 7,
					],
					[
	                	'requirements' => [
							'resource' => 'STEEL',
							'amount' => 1,
						],
						'points' => 5,
					],
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 3,
						],
						'points' => 6,
					],
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 3,
						],
						'points' => 5,
					],
				],
			],
		]);
		Station::create([
			'id' => 6,
			'position' => 4.5,
			'name' => 'Passing Loop',
			'min_player' => 5,
			'track' => 1,
			'points' => 9,
			'spaces' => [
				Station::EXCAVATE => [
					[
	                	'requirements' => [
							'resource' => 'RUBBLE',
							'amount' => 4,
						],
						'points' => 5,
					],
				],
				Station::BUILD => [
					[
	                	'requirements' => [
							'resource' => 'STEEL',
							'amount' => 1,
						],
						'points' => 8,
					],
					[
	                	'requirements' => [
							'resource' => 'STEEL',
							'amount' => 1,
						],
						'points' => 6,
					],
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 2,
						],
						'points' => 5,
					],
				],
			],
		]);
		Station::create([
			'id' => 7,
			'position' => 5,
			'name' => 'Rocky Valley Halt',
			'track' => 1,
			'points' => 11,
			'spaces' => [
				Station::EXCAVATE => [
					[
	                	'requirements' => [
							'resource' => 'RUBBLE',
							'amount' => 4,
						],
						'points' => 5,
					],
				],
				Station::BUILD => [
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 4,
						],
						'points' => 9,
					],
				],
			],
		]);
		Station::create([
			'id' => 8,
			'position' => 6,
			'name' => 'Clogwyn Station',
			'track' => 3,
			'points' => 15,
			'spaces' => [
				Station::EXCAVATE => [
					[
	                	'requirements' => [
							'resource' => 'RUBBLE',
							'amount' => 6,
						],
						'points' => 9,
					],
				],
				Station::BUILD => [
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 3,
						],
						'points' => 6,
					],
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 3,
						],
						'points' => 7,
					],
					[
	                	'requirements' => [
							'resource' => 'STEEL',
							'amount' => 1,
						],
						'points' => 7,
					],
					[
	                	'requirements' => [
							'resource' => 'STEEL',
							'amount' => 1,
						],
						'points' => 6,
					],
				],
			],
		]);
		Station::create([
			'id' => 9,
			'position' => 7,
			'name' => 'Yr Wyddfa (The Summit)',
			'track' => 2,
			'points' => 21,
			'spaces' => [
				Station::EXCAVATE => [
					[
	                	'requirements' => [
							'resource' => 'RUBBLE',
							'amount' => 3,
						],
						'points' => 5,
					],
					[
	                	'requirements' => [
							'resource' => 'RUBBLE',
							'amount' => 3,
						],
						'points' => 3,
					],
				],
				Station::BUILD => [
					[
	                	'requirements' => [
							'resource' => 'STEEL',
							'amount' => 2,
						],
						'points' => 14,
					],
					[
	                	'requirements' => [
							'resource' => 'STEEL',
							'amount' => 1,
						],
						'points' => 7,
					],
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 3,
						],
						'points' => 7,
					],
					[
	                	'requirements' => [
							'resource' => 'STONE',
							'amount' => 3,
						],
						'points' => 5,
					],
				],
			],
		]);
		Station::reguard();
        $this->command->info('Station table seeded!');
    }
}
