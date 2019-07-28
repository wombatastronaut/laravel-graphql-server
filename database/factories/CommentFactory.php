<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) use ($factory) {
    return [
        'content' => $faker->text,
        'post_id' => $factory->create(App\Post::class)->id,
        'user_id' => $factory->create(App\User::class)->id
    ];
});
