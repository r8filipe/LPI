<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 09/04/2016
 * Time: 20:43
 */

$factory->define(App\Local_type::class, function (Faker\Generator $faker) {
    return [
        'description' => $faker->sentence(1),
    ];
});