<?php

use Faker\Generator as Faker;

$factory->define(App\Event::class, function (Faker $faker) {
    return [
        'nombre_even'=>$faker->text(200),
        'lugar_even'=>$faker->text(150),
        'descripcion_even'=>$faker->text(2500),
        'tipo_even'=>$faker->text(15),
        'organizador_even'=>$faker->text(20),
        'fecha_even'=>$faker->date('Y-m-d'),
        'hora_even'=>$faker->date('H:i:s'),
    ];
});