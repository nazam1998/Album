<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use App\Photo;
use Faker\Generator as Faker;

$factory->define(Photo::class, function (Faker $faker) {
    return [
        'nom' => $faker->unique()->name,
        'img_path' =>"https://picsum.photos/200/300?random=2",
        'description' => $faker->text,
        'id_album'=>Album::inRandomOrder()->first()->id
    ];
});
