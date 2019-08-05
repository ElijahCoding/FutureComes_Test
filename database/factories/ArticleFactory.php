<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\Models\User')->create()->id,
        'title' => $faker->sentence(4),
        'body' => $faker->sentence(8)
    ];
});
