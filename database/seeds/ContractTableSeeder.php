<?php

use App\ORM\Contract;
use Illuminate\Database\Seeder;

class ContractTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Contract::unguard();
        Contract::create([
            'id' => 1,
            'points' => 15,
            'requirements' => [
			'resource' => 'STATION',
			'amount' => 5,
		],
		'phase_letter' => 'D',
		'power' => [
			'description' => 'Whenever you take the Lay Track Action this Round, you do it at one more than the current Work Rate.',
		],
		'weather_id' => 2,
            ]);
            Contract::create([
                'id' => 2,
                'points' => 10,
                'requirements' => [
			'resource' => 'STATION',
			'amount' => 4,
		],
		'phase_letter' => 'D',
		'power' => [
			'description' => 'Whenever you take the Lay Track Action this Round, you do it at one more than the current Work Rate.',
		],
		'weather_id' => 2,
            ]);
            Contract::create([
                'id' => 3,
                'points' => 6,
                'requirements' => [
			'resource' => 'STATION',
			'amount' => 3,
		],
		'phase_letter' => 'B',
		'power' => [
			'description' => 'After all other Excavate Actions have been resolved, you may excavate completely the next space with Rubble in it (Track card or Building site).',
		],
		'weather_id' => 2,
            ]);
            Contract::create([
                'id' => 4,
                'points' => 17,
                'requirements' => [
			'resource' => ['STATION', 'TRACK'],
			'amount' => [2, 2],
		],
		'phase_letter' => 'A',
		'power' => [
			'description' => 'Swap the Weather disc in the middle position on the Weather Track with one of your choice from general supply (this weather will be used at the start of the next Round).'
		],
		'weather_id' => 1,
            ]);
            Contract::create([
                'id' => 5,
                'points' => 14,
                'requirements' => [
			'resource' => ['STATION', 'TRACK', 'RUBBLE'],
			'amount' => [2, 1, 4],
		],
		'phase_letter' => 'F',
		'power' => [
			'description' => 'Draw the top two cards from the Contract Card Deck. You may keep this card or one of the cards you have drawn. Discard the other two cards.',
		],
		'weather_id' => 1,
            ]);
            Contract::create([
                'id' => 6,
                'points' => 22,
                'requirements' => [
			'resource' => ['RUBBLE', 'TRACK'],
			'amount' => [12, 1],
		],
		'phase_letter' => 'E',
		'power' => [
			'description' => 'Whenever you take a Build Action [E] this Round, you may use 3 Iron Ore as if it was a Steel Bar.',
		],
		'weather_id' => 1,
            ]);
            Contract::create([
                'id' => 7,
                'points' => 11,
                'requirements' => [
			'resource' => 'RUBBLE',
			'amount' => 8,
		],
		'phase_letter' => 'A',
		'power' => [
			'description' => 'Whenever you take a Stock Yard Action this Round, you may take additional cubes (the one Coal per Labourer limit still applies).',
		],
		'weather_id' => 3,
            ]);
            Contract::create([
                'id' => 8,
                'points' => 11,
                'requirements' => [
			'resource' => 'RUBBLE',
			'amount' => 8,
		],
		'phase_letter' => 'D',
		'power' => [
			'description' => 'After all other Lay Track Actions have been resolved, you may take a Lay Track Action as if you had placed a Labourer here this Round.',
		],
		'weather_id' => 3,
            ]);
            Contract::create([
                'id' => 9,
                'points' => 14,
                'requirements' => [
			'resource' => ['RUBBLE', 'TRACK'],
			'amount' => [6, 1],
		],
		'phase_letter' => 'E',
		'power' => [
			'description' => 'Whenever you pay a Stone requirement for a Building site this Round, pay one Stone less.',
		],
		'weather_id' => 2,
            ]);
            Contract::create([
                'id' => 10,
                'points' => 5,
                'requirements' => [
			'resource' => 'RUBBLE',
			'amount' => 4,
		],
		'phase_letter' => 'E',
		'power' => [
			'description' => 'After all other Build Actions have been resolved, you may take a Build Action as if you had placed a Labourer here this Round.',
		],
		'weather_id' => 3,
            ]);
            Contract::create([
                'id' => 11,
                'points' => 5,
                'requirements' => [
			'resource' => 'RUBBLE',
			'amount' => 4,
		],
		'phase_letter' => 'C',
		'power' => [
			'description' => 'Immediately convert 2 Rubble in your personal supply into 1 Stone up to 3 times. Take the Stone from the Supply Bag.',
		],
		'weather_id' => 1,
            ]);
            Contract::create([
                'id' => 12,
                'points' => 16,
                'requirements' => [
			'resource' => 'RUBBLE',
			'amount' => 12,
		],
		'phase_letter' => 'C',
		'power' => [
			'description' => 'Immediately convert 2 Iron Ore from your personal supply into 1 Steel Bar once or twice. Put the Iron Ore into the Bag.',
		],
		'weather_id' => 2,
            ]);
            Contract::create([
                'id' => 13,
                'points' => 18,
                'requirements' => [
			'resource' => ['RUBBLE', 'TRACK'],
			'amount' => [4, 2],
		],
		'phase_letter' => 'A',
		'power' => [
			'description' => 'After this card has been played, no other Contract cards may be played for the rest of the Round.',
		],
		'weather_id' => 1,
            ]);
            Contract::create([
                'id' => 14,
                'points' => 11,
                'requirements' => [
			'resource' => ['RUBBLE', 'TRACK'],
			'amount' => [4, 1],
		],
		'phase_letter' => 'E',
		'power' => [
			'description' => 'Whenever you pay a Stone requirement for a Building site this Round, pay one Stone less.',
		],
		'weather_id' => 1,
            ]);
            Contract::create([
                'id' => 15,
                'points' => 17,
                'requirements' => [
			'resource' => ['RUBBLE', 'TRACK'],
			'amount' => [8, 1],
		],
		'phase_letter' => 'E',
		'power' => [
			'description' => 'Whenever you pay a Stone requirement for a Building site this Round, pay one Stone less.'
		],
		'weather_id' => 1,
            ]);
            Contract::create([
                'id' => 16,
                'points' => 23,
                'requirements' => [
			'resource' => ['RUBBLE', 'TRACK'],
			'amount' => [8, 2],
		],
		'phase_letter' => NULL,
		'power' => [
			'description' => 'You may discard this card instead of a Steel Bar when required to pay for train maintenance.'
		],
		'weather_id' => 1,
            ]);
            Contract::create([
                'id' => 17,
                'points' => 21,
                'requirements' => [
			'resource' => 'RUBBLE',
			'amount' => 16,
		],
		'phase_letter' => 'E',
		'power' => [
			'description' => 'Whenever you take a Build Action [E] this Round, you may use 2 Rubble as 1 Stone or 4 Rubble as 2 Stone.',
		],
		'weather_id' => 1,
            ]);
            Contract::create([
                'id' => 18,
                'points' => 14,
                'requirements' => [
			'resource' => 'RUBBLE',
			'amount' => 11,
		],
		'phase_letter' => 'G',
		'power' => [
			'description' => 'Immediately draw three cubes from the Supply Bag; return each Event cube drawn this way.',
		],
		'weather_id' => 1,
            ]);
            Contract::create([
                'id' => 19,
                'points' => 10,
                'requirements' => [
			'resource' => 'RUBBLE',
			'amount' => 7,
		],
		'phase_letter' => 'G',
		'power' => [
			'description' => 'Immediately draw three cubes from the Supply Bag; return each Event cube drawn this way.',
		],
		'weather_id' => 1,
            ]);
            Contract::create([
                'id' => 20,
                'points' => 40,
                'requirements' => [
			'resource' => 'TRACK',
			'amount' => 5,
		],
		'phase_letter' => 'A',
		'power' => [
			'description' => 'Immediately take any 2 cubes from the Stock Yard (one Coal maximum).',
		],
		'weather_id' => 2,
            ]);
            Contract::create([
                'id' => 21,
                'points' => 24,
                'requirements' => [
			'resource' => 'TRACK',
			'amount' => 3,
		],
		'phase_letter' => NULL,
		'power' => [
			'description' => 'You may discard the card instead of a Steel Bar when required to pay for train maintenance.',
		],
		'weather_id' => 2,
            ]);
            Contract::create([
                'id' => 22,
                'points' => 24,
                'requirements' => [
			'resource' => 'TRACK',
			'amount' => 3,
		],
		'phase_letter' => 'A',
		'power' => [
			'description' => 'Take the Start Player arker. The marker cannot move again this Round.',
		],
		'weather_id' => 2,
            ]);
            Contract::create([
                'id' => 23,
                'points' => 31,
                'requirements' => [
			'resource' => 'TRACK',
			'amount' => 4,
		],
		'phase_letter' => 'A',
		'power' => [
			'description' => 'Immediately take any 2 cubes from the Stock Yard.',
		],
		'weather_id' => 2,
            ]);
            Contract::create([
                'id' => 24,
                'points' => 4,
                'requirements' => [
			'resource' => 'TRACK',
			'amount' => 1,
		],
		'phase_letter' => 'C',
		'power' => [
			'description' => 'Immediately convert 2 Iron Ore from your personal supply into 1 Steel Bar once or twice. Put the Iron Ore into the Bag.',
		],
		'weather_id' => 2,
            ]);
            Contract::create([
                'id' => 25,
                'points' => 7,
                'requirements' => [
			'resource' => 'TRACK',
			'amount' => 1,
		],
		'phase_letter' => 'E',
		'power' => [
			'description' => 'Whenever you take the Build Action [E] this Round, you may use 3 Iron Ore as if it was a Steel Bar.',
		],
		'weather_id' => 1,
            ]);
            Contract::create([
                'id' => 26,
                'points' => 15,
                'requirements' => [
			'resource' => 'TRACK',
			'amount' => 2,
		],
		'phase_letter' => 'B',
		'power' => [
			'description' => 'Whenever you take the Excavate Action this Round, take double the number of Rubble cubes (Work Rate plus any bonuses).',
		],
		'weather_id' => 3,
            ]);
            Contract::create([
                'id' => 27,
                'points' => NULL,
                'requirements' => [
			'resource' => 'COAL',
			'points' => 2,
		],
		'phase_letter' => 'G',
		'power' => [
			'description' => 'Immediately move your Surveyor 1 Station further along.',
		],
		'weather_id' => 3,
            ]);
            Contract::create([
                'id' => 28,
		'min_player' => 3,
		'max_player' => 5,
                'points' => 23,
                'requirements' => [
			'resource' => ['SURVEYOR', 'STATION'],
			'amount' => [6, 5],
		],
		'phase_letter' => 'A',
		'power' => [
			'description' => 'Immediately move one of your placed Labourers to any different, empty Action space.',
		],
		'weather_id' => 2,
            ]);
            Contract::create([
                'id' => 29,
		'min_player' => 3,
		'max_player' => 5,
                'points' => NULL,
                'requirements' => [
			'resource' => 'SURVEYOR',
			'amount' => [5, 6, 7],
            'points' => [6, 10, 15],
		],
		'phase_letter' => 'A',
		'power' => [
			'description' => 'You may ignore the limit on taking Coal from the Stock Yard this Round.',
		],
		'weather_id' => 2,
            ]);
            Contract::create([
                'id' => 30,
                'points' => 15,
                'requirements' => [
			'resource' => 'TRACK',
			'amount' => 2,
		],
		'phase_letter' => 'B',
		'power' => [
			'description' => 'Whenever you take the Excavate Action this Round, take double the number of Rubble cubes (Work Rate plus any bonuses).',
		],
		'weather_id' => 3,
            ]);
            Contract::reguard();
            $this->command->info('Contract table seeded!');
	}

}
