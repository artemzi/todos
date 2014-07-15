<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TodosTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Todo::create([
                'body'      => $faker->sentence(3),
                'completed' => $faker->boolean()
			]);
		}
	}

}