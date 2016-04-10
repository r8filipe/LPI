<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 09/04/2016
 * Time: 20:45
 */

$factory->define(App\Event::class, function (Faker\Generator $faker) {
    return [
        'lat' => $faker->latitude,
        'long' => $faker->longitude,
        'sub_category_id' => $faker->numberBetween(0,10),
        'local_type_id' => $faker->numberBetween(0,10),
        'address' => $faker->address,
    ];
});