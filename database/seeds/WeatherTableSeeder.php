<?php

use Illuminate\Database\Seeder;
use App\ORM\Weather;

class WeatherTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Weather::unguard();
            Weather::create([
                'id' => '1',
                'name' => 'Sun',
            ]);
            Weather::create([
                'id' => '2',
                'name' => 'Rain',
            ]);
            Weather::create([
                'id' => '3',
                'name' => 'Fog',
            ]);
		Weather::reguard();
            $this->command->info('Weather table seeded!');
	}

}
