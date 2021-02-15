<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Articles;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Articles::class, function (Faker $faker) {
    return [
        'title' => $faker->realText($maxNbChars = 30, $indexSize = 1),
        'subheading' => $faker->realText($maxNbChars = 50, $indexSize = 1),
        'content' => $faker->realText($maxNbChars = 2500, $indexSize = 5),
        'cover_image' => 'genericCover.jpg',
        'status' => '1',
    ];
});
