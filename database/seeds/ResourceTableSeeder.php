<?php

use Illuminate\Database\Seeder;
use App\ORM\Resource;

class ResourceTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Resource::unguard();
            Resource::create([
                'id' => '1',
                'name' => 'Iron Ore',
            ]);
            Resource::create([
                'id' => '2',
                'name' => 'Stone',
            ]);
            Resource::create([
                'id' => '3',
                'name' => 'Coal',
            ]);
            Resource::create([
                'id' => '4',
                'name' => 'Rubble',
            ]);
            Resource::create([
                'id' => '5',
                'name' => 'Steel Bar',
            ]);
            Resource::create([
                'id' => '6',
                'name' => 'Event',
            ]);
		Resource::reguard();
            $this->command->info('Resource table seeded!');
	}

}
