<?php

use Illuminate\Database\Seeder;
use App\ORM\Game\Type;
use App\ORM\Action;

class BaseGameSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Type::unguard();
		$game = Type::create([
			'id' => 1,
			'name' => 'Base',
		]);
		$actions = Action::where('phase_letter', '>=', 'A')
			->where('phase_letter', '<=', 'G')
			->where('min_player', '>=', 1)
			->where('min_player', '<=', 5)
			->get()->pluck('id')->toArray();
		$game->actions()->attach($actions);
		$game->contracts()->attach([
			1, 2, 3, 4, 5, 6, 7, 8, 9, 10,
			11, 12, 13, 14, 15, 16, 17, 18, 19, 20,
			21, 22, 23, 24, 25, 26, 27, 28, 29, 30,
		]);
		$game->trains()->attach([
			'1', '1L', '2', '3', '4', '5', '6', '7',
			'11', '12', '13', '22', '23',
		]);
		$game->stations()->attach([
			1, 2, 3, 4, 5, 6, 7, 8, 9,
		]);
		Type::reguard();
		$this->command->info('Base Game Created!');
	}

}
