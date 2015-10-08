<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\ORM\User;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
            User::create([
                'name' => 'Benjamin Wells Kerenza',
                'email' => 'ben.j.wells@gmail.com',
                'password' => bcrypt('Tansy'),
            ]);
            $this->command->info('User table seeded!');
	}

}
