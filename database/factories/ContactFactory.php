<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'user_id'=>factory(\App\User::class),
        'name'=>$faker->name,
        'email'=>$faker->email,
        'birthday'=>"05/14/1988",
        'company'=>$faker->company,
    ];
});
