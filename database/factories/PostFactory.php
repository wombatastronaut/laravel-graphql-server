<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) use ($factory) {
    return [
        'title' => $faker->word,
        'content' => $faker->text,
        'user_id' => $factory->create(App\User::class)->id
    ];
});
