<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'rfc' => 'XAXX0'.$faker->ean8,
        'password' => bcrypt(123456),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Applicant::class, function (Faker\Generator $faker) {
    $curp = $faker->ean8;
    return [
        'name' => $faker->name,
        'firstlastname' => $faker->lastName,
        'secondlastname' => $faker->lastName,
        'curp' => 'XAXX0'.$curp,
        'rfc' => 'XAXX0'.$curp,
        'birthdate' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'sex' => $faker->randomElement(['Masculino', 'Femenino']),
        'email' => $faker->unique()->email,
        'nationality' => $faker->randomElement(['Mexicana', 'Extranjero']),
        'telephone' => $faker->phoneNumber,
        'celphone' => $faker->phoneNumber,
        'nss' => "1234".$faker->ean8,
        'maritalstatus' => $faker->randomElement(['Casado', 'Soltero', 'Divorciado', 'Viudo']),
        'street' => $faker->streetName,
        'num_int' => $faker->buildingNumber,
        'num_ext' => $faker->randomElement(['', $faker->buildingNumber]),
        'colony' => $faker->city,
        'zip' => $faker->postcode,
        'country_id' => 142 ,
        'state_id' => 2438,
        'city_id' => 27849,
        'school_name' => 'UNAM MÉXICO',
        'specialty' => $faker->company,
        'month_start' => $faker->monthName($max = 'now'),
        'year_start' => $faker->year($max = 'now'),
        'month_end' => $faker->monthName($max = 'now'),
        'year_end' => $faker->year($max = 'now'),
        'average' => $faker->randomFloat($nbMaxDecimals = 2, $min = 50, $max = 100),
        'career_id' => 1,
    ];
});
$factory->define(App\Partner::class, function (Faker\Generator $faker) {
    $now = date('Y-m-d H:i:s');
    return [
        'name' => $faker->name,
        'firstlastName' => $faker->lastName,
        'secondlastName' => $faker->lastName,
        'curp' => 'XAXX0'.$faker->ean13,
        'birthdate' => $faker->dateTimeBetween($startDate = '-59 years', $endDate = '-22 years'),
        'sex' => $faker->randomElement($array = array ('Femenino','Masculino')),
        'email1' => $faker->unique()->email,
        'email2' => $faker->unique()->email,
        'nationality' => $faker->randomElement($array = array ('Mexicana','Extranjera')),
        'maritalstatus' => $faker->randomElement($array = array ('Casado', 'Soltero', 'Divorciado', 'Viudo')),
        'user_id' => $faker->numberBetween($min=1,$max=50),
        'created_at' => $now
    ];
});

$factory->define(App\Teacher::class, function (Faker\Generator $faker) {
    return [
        'noAccount' => $faker->numberBetween($min=1200000,$max=1500000),
        'type' => $faker->randomElement($array = array('Tiempo completo', 'Medio tiempo', 'Contrato')),
        'partner_id' => $faker->numberBetween($min=1,$max=50),
    ];
});
