<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 09/04/2016
 * Time: 20:40
 */

$factory->define(App\Photo::class, function (Faker\Generator $faker) {
    return [
        'event_id' => $faker->numberBetween(0,10),
        'photo' => $faker->sentence(1),
    ];
});