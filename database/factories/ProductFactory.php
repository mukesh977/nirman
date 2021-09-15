<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'sku' => $this->faker->numberBetween(1000,2000),
        'title' => $this->faker->randomElement($array = array ('water pump','normal pump','pump', 'electric pump')),
        'slug' => $this->faker->word(),
        'regular_price' => $this->faker->numberBetween(1000,150000),
        'sale_price' => $this->faker->numberBetween(1000,150000),
        'features' => $this->faker->paragraph(3,true),
        'description' => $this->faker->paragraph(3,true),
        'order' => $this->faker->numberBetween(1,100),
        'stock' => $this->faker->numberBetween(20,50),
        'featured_image' => $this->faker->randomElement($array = array('1600668895-cat2.jpeg', '1600668895-cat2.jpg', '1600668895-pro13.png', '1600668895-cat2.jpeg', '1600668895-cat2.jpg', '1600668895-pro13.png')),
        'status'=>'1',
        'product_categories_id' => $this->faker->numberBetween(13,18),
    ];
});
