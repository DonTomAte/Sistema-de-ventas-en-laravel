<?php

use Faker\Generator as Faker;
use App\Product;
$factory->define(Product::class, function (Faker $faker) {
    return [
			'name'=> $faker->domainWord ,
            'description'=> $faker->sentence(10),
            'image'=> $faker->imageUrl(250,250),
            'price'=> $faker->randomFloat(2,5,150) ,
            'stock'=> $faker->numberBetween(0,100),
            'expiration_date'=> $faker->date() ,
            'category_id'=> 1,
            'provider_id'=> 1,
    ];
});
