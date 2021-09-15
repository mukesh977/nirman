<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Order;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Order::class, function (Faker $faker) {
    $status_array = array('on hold', 'completed', 'processing', 'shipping', 'cancelled');
    $user_array = array(1, 3, 4);
    $date_array = array('2020-12-31 11:57:48', '2020-12-01 11:57:48', );
    
    
    
    return [
        'name' => $this->faker->name,
        'street_address' => $this->faker->address,
        'city' => $this->faker->city,
        'phone' => $this->faker->PhoneNumber,
        'email' => $this->faker->unique()->safeEmail,
        'total_price' => $this->faker->numberBetween(10000, 50000),
        'description' => $this->faker->text,
        'status' => $status_array[rand(0, (count($status_array) - 1))],
        'user_id' => $user_array[rand(0, (count($user_array) - 1))],
        'created_at' => Carbon::today()->subDays(rand(0, 20))
    ];
});
