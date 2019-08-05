<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => factory('App\Models\User')->create()->id,
        'article_id' => factory('App\Models\Article')->create()->id,
        'body' => $faker->sentence(8)
    ];
});
