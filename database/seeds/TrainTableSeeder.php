<?php

use Illuminate\Database\Seeder;
use App\ORM\Train;

class TrainTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Train::unguard();
            Train::create([
                'id' => '1',
                'name' => 'L.A.D.A.S.',
                'power' => [
			'description' => 'Excavate at 2 more than the work rate.'
		],
                'cost' => [
			'resource' => 'STEEL',
			'amount' => 2,
		],
		'phase_letter' => 'B',
		'worker' => TRUE,
                'worker_cost' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
		'supplies' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
            ]);
            Train::create([
                'id' => '1L',
                'name' => 'L.A.D.A.S. (lost)',
                'power' => [
			'description' => '9 points if cleared of Rubble. On Action [G], remove a Rubble.'
		],
                'cost' => [
			'resource' => NULL,
			'amount' => 0,
		],
		'phase_letter' => 'G',
		'worker' => FALSE,
		'supplies' => [
			'resource' => 'RUBBLE',
			'amount' => 3,
		],
            ]);
            Train::create([
                'id' => '2',
                'name' => 'Enid',
                'power' => [
			'description' => 'When converting Iron Ore to Steel Bars you may use just two Iron Ore for each Steel Bar.'
		],
                'cost' => [
			'resource' => 'STEEL',
			'amount' => 2,
		],
		'phase_letter' => 'C',
		'worker' => TRUE,
                'worker_cost' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
		'supplies' => NULL,
            ]);
            Train::create([
                'id' => '3',
                'name' => 'Wyddfa',
                'power' => [
			'description' => 'When taking the Stock Yard action you may take an additional cube (one Coal maximum still applies).'
		],
                'cost' => [
			'resource' => 'STEEL',
			'amount' => 2,
		],
		'phase_letter' => 'A',
		'worker' => TRUE,
                'worker_cost' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
		'supplies' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
            ]);
            Train::create([
                'id' => '4',
                'name' => 'Snowdon',
                'power' => [
			'description' => '9 points at the end of the game.'
		],
                'cost' => [
			'resource' => 'STEEL',
			'amount' => 1,
		],
		'phase_letter' => NULL,
		'worker' => TRUE,
                'worker_cost' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
		'supplies' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
            ]);
            Train::create([
                'id' => '5',
                'name' => 'Moel Siabod',
                'power' => NULL,
                'cost' => [
			'resource' => 'STEEL',
			'amount' => 1,
		],
		'phase_letter' => NULL,
		'worker' => TRUE,
                'worker_cost' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
		'supplies' => [
			'resource' => 'COAL',
			'amount' => 2,
		],
            ]);
            Train::create([
                'id' => '6',
                'name' => 'Padarn',
                'power' => [
			'description' => 'Take 1 Build action after all other Build actions (min:1) have been resoved.'
		],
                'cost' => [
			'resource' => 'STEEL',
			'amount' => 2,
		],
		'phase_letter' => 'E',
		'worker' => TRUE,
                'worker_cost' => [
			'resource' => 'COAL',
			'amount' => 2,
		],
		'supplies' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
            ]);
            Train::create([
                'id' => '7',
                'name' => 'Ralph',
                'power' => [
			'description' => 'Build Track at 1 more than the work rate.'
		],
                'cost' => [
			'resource' => 'STEEL',
			'amount' => 2,
		],
		'phase_letter' => 'E',
		'worker' => TRUE,
		'supplies' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
            ]);
            Train::create([
                'id' => '11',
                'name' => 'Prototype Engine',
                'power' => [
			'description' => '3 points at the end of the game. If the weather is raining you cannot hire an additional worker.'
		],
                'cost' => NULL,
		'phase_letter' => NULL,
		'worker' => TRUE,
                'worker_cost' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
		'supplies' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
            ]);
            Train::create([
                'id' => '12',
                'name' => 'Ivlor the engine',
                'power' => [
			'description' => 'When the weather is foggy you may still Excavate and Build Track.'
		],
                'cost' => [
			'resource' => 'STEEL',
			'amount' => 1,
		],
		'phase_letter' => NULL,
		'worker' => TRUE,
                'worker_cost' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
		'supplies' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
            ]);
            Train::create([
                'id' => '13',
                'name' => 'The Dawn Raider',
                'power' => [
			'description' => 'When the event Builds Track you may do it for them at 1 Steel Bar per Track.'
		],
                'cost' => [
			'resource' => 'STEEL',
			'amount' => 1,
		],
		'phase_letter' => NULL,
		'worker' => TRUE,
                'worker_cost' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
		'supplies' => [
			'resource' => 'COAL',
			'amount' => 1,
		],
            ]);
            Train::create([
                'id' => '22',
                'name' => 'Jumbo The Circus Elephant',
                'power' => [
			'description' => '-2 points for each Rubble on the card.'
		],
                'cost' => [
			'resource' => 'STEEL',
			'amount' => 1,
		],
		'phase_letter' => NULL,
		'worker' => TRUE,
                'worker_cost' => [
			'resource' => 'RUBBLE',
			'amount' => 1,
		],
		'supplies' => NULL,
            ]);
            Train::create([
                'id' => '23',
                'name' => 'Tuxford\'s Boydell Traction Engine',
                'power' => [
			'description' => 'Hiring a Worker if free when the weather is raining.'
		],
                'cost' => [
			'resource' => 'STEEL',
			'amount' => 1,
		],
		'phase_letter' => NULL,
		'worker' => TRUE,
                'worker_cost' => [
			'resource' => 'STEEL',
			'amount' => 1,
		],
		'supplies' => NULL,
            ]);
            Train::reguard();
            $this->command->info('Train table seeded!');
	}

}
