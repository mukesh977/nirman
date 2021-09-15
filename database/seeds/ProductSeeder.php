<?php

use Illuminate\Database\Seeder;
use App\Model\Product;

class ProductSeeder extends Seeder
{    
    public function run()
    {
        factory('App\Model\Product')
            ->times(50)
            ->create();
    }
}
