<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;

use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {



    return [
        'name'          =>  $faker->text($maxNbChars = 5),
        'image_url' =>$faker->image('public/images',640,480, null, false),
    ];

});
