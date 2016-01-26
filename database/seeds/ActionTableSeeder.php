<?php

use Illuminate\Database\Seeder;
use App\ORM\Action;

class ActionTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Action::unguard();
			$description = 'Choose three items from the stock yard with a limit of 1 Coal';
            Action::create([
                'phase_letter' => 'A',
            	'min_player' => 1,
            	'max_player' => 2,
            	'description' => $description,
            ]);
            Action::create([
                'phase_letter' => 'A',
            	'min_player' => 3,
            	'max_player' => 3,
            	'spaces' => 3,
            	'description' => $description,
            ]);
            Action::create([
                'phase_letter' => 'A',
            	'min_player' => 4,
            	'max_player' => 5,
            	'spaces' => 4,
            	'description' => $description,
            ]);
			$description = 'Excavate rubble based on the current work rate';
            Action::create([
                'phase_letter' => 'B',
            	'min_player' => 1,
            	'max_player' => 3,
            	'description' => $description,
            ]);
            Action::create([
                'phase_letter' => 'B',
            	'min_player' => 4,
            	'max_player' => 5,
            	'spaces' => 3,
            	'description' => $description,
            ]);
			$description = 'Convert 3 Iron Ore to 1 Steel Bar or 2 Rubble to 1 Stone upto 3 times';
            Action::create([
                'phase_letter' => 'C',
            	'min_player' => 1,
            	'max_player' => 3,
            	'spaces' => 1,
            	'description' => $description,
            ]);
            Action::create([
            		'phase_letter' => 'C',
            		'min_player' => 4,
            		'max_player' => 4,
            		'description' => $description,
        	]);
        	Action::create([
                'phase_letter' => 'C',
            	'min_player' => 5,
            	'max_player' => 5,
            	'spaces' => 3,
            	'description' => $description,
            ]);
			$description = 'Lay track based on the current work rate';
            Action::create([
                'phase_letter' => 'D',
            	'min_player' => 1,
            	'max_player' => 2,
            	'spaces' => 1,
            	'description' => $description,
            ]);
            Action::create([
                'phase_letter' => 'D',
            	'min_player' => 3,
            	'max_player' => 3,
            	'description' => $description,
            ]);
            Action::create([
                'phase_letter' => 'D',
            	'min_player' => 4,
            	'max_player' => 5,
            	'spaces' => 3,
            	'description' => $description,
            ]);
			$description = 'Build on a station space or build an available train';
            Action::create([
                'phase_letter' => 'E',
            	'min_player' => 1,
            	'max_player' => 4,
            	'description' => $description,
            ]);
            Action::create([
                'phase_letter' => 'E',
            	'min_player' => 5,
            	'max_player' => 5,
            	'spaces' => 3,
            	'description' => $description,
            ]);
			$description = 'Choose 1 of the avaliable Contracts to take';
            Action::create([
                'phase_letter' => 'F',
            	'min_player' => 1,
            	'max_player' => 2,
            	'spaces' => 1,
            	'description' => $description,
            ]);
            Action::create([
                'phase_letter' => 'F',
            	'min_player' => 3,
            	'max_player' => 5,
            	'description' => $description,
            ]);
			$description = 'Move the surveyour 1 station up the mountain';
            Action::create([
                'phase_letter' => 'G',
            	'min_player' => 1,
            	'max_player' => 5,
            	'spaces' => null,
            	'description' => $description,
            ]);
		Action::reguard();
            $this->command->info('Action table seeded!');
	}

}
