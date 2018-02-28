<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(App\Models\User::class)->create([
			'name' => 'Rodrigo Cabral',
			'email' => 'rodrixcornell@gmail.com',
			'role' => 'admin',
			'password' => bcrypt('QWEpoi123@@')
		]);
		factory(App\Models\User::class, 9)->create();
	}
}
