<?php
/**
 * Created by PhpStorm.
 * User: Henrique
 * Date: 09/04/2016
 * Time: 20:38
 */
/*
 *
 *
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});