<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
		'name' => $faker->name,
		'description' => $faker->optional()->paragraph($nbSentences = 3, $variableNbSentences = true),
		'is_reserved' => $faker->boolean($chanceOfGettingTrue = 5),
		'is_purchased' => $faker->boolean($chanceOfGettingTrue = 5),
		'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 9.98, $max = 5000.00),
		'url' => $faker->url,
		'wantd_lvl' => $faker->randomElement($array = array ('0','1','2','3','4','5')),
		'notes' => $faker->optional()->sentence($nbWords = 6, $variableNbWords = true),
		'brand' => $faker->optional()->word,
		'color' => $faker->optional()->word,
		'size' => $faker->optional()->word,
		'category_id' => $faker->randomElement($array = array ('1','2','3','4','5')),
		'user_id' => $faker->randomElement($array = array ('1','2','3','4','5')),
    ];
});
