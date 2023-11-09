<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->name(),
        'descricao' => $faker->text(50),
        'peso' => $faker->numberBetween(1, 80),
        'unidade_id' => '1',
    ];
});
