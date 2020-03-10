<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
		'name' => $faker->name,
		'description' => $faker->optional()->paragraph($nbSentences = 3, $variableNbSentences = true),
		'is_active' => $faker->randomElement($array = array ('1','2')),
    ];
});
