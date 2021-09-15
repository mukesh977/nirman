<?php

use App\Model\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 250;
        factory(Order::class, $count)->create();
    }
}
