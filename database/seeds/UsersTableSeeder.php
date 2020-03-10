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
        DB::table('users')->insert([
			[
				'name' => 'bentley',
				'email' => 'iamadevelopertoo@gmail.com',
				'password' => bcrypt('12345'),
			],
			[
				'name' => 'sis',
				'email' => 'iamadevelopertoo+2@gmail.com',
				'password' => bcrypt('12345'),
			],
			[
				'name' => 'mom',
				'email' => 'iamadevelopertoo+3@gmail.com',
				'password' => bcrypt('12345'),
			],
			[
				'name' => 'dad',
				'email' => 'iamadevelopertoo+4@gmail.com',
				'password' => bcrypt('12345'),
			],
			[
				'name' => 'stranger',
				'email' => 'iamadevelopertoo+5@gmail.com',
				'password' => bcrypt('12345'),
			],
		]);
    }
}
