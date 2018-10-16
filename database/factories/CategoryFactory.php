<?php

use Faker\Generator as Faker;
use App\Category;
$factory->define(Category::class, function (Faker $faker) {
    return [
            'name'=> ucFirst($faker->word()),
            'description'=> $faker->sentence(10),
            'type'=> "general"
		   ];
});
