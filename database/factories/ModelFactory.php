<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\BlogPost::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(6, true),
        'alias' => $faker->slug,
        'active' => true,
    ];
});

$factory->define(App\Models\BlogPostContent::class, function (Faker\Generator $faker) {
    return [
        'content' => $faker->text(1000),
    ];
});
