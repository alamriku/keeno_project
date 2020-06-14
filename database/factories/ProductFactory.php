<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $images = '';
    for($i=0; $i <= 3;$i++){
        $images .=$faker->image('public/images',640,480, null, false).',';
    }
    return [
        'title'=>rtrim($faker->sentence(rand(1,2)),'.'),
        'images_url' =>$images,
        'description'=>$faker->paragraphs(rand(3,7),true),
        'is_featured' => $faker->boolean($chanceOfGettingTrue = 50),
        'price'=>$faker->numberBetween($min = 10, $max = 100000),
        'rating'=>$faker->numberBetween($min = 1, $max = 5),
        'category_id'=>App\Category::pluck('id')->random(),
    ];
});
