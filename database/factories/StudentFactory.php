<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'nombres_est'=>$faker->text(100),
        'apellidos_est'=>$faker->text(100),
        'identificacion_est'=>$faker->text(20),
        'celular_est'=>$faker->text(15),
        'correo_est'=>$faker->text(100),
        'firma_est'=>$faker->text(50),
        'autizacion_uso_datos_personales_est'=>$faker->boolean()

    ];
});
