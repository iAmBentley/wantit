<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
			[
				[
					'name' => 'audio',
				],
				[
					'name' => 'bike stuff',
				],
				[
					'name' => 'clothing',
				],
				[
					'name' => 'computer',
				],
				[
					'name' => 'educational',
				],
				[
					'name' => 'home theater',
				],
				[
					'name' => 'photography',
				],
				[
					'name' => 'software',
				],
				[
					'name' => 'vehicle',
				],
			]
		);
    }
}
