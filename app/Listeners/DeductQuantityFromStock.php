<?php

namespace App\Listeners;

use App\Events\ProductOrdered;
use App\Model\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


class DeductQuantityFromStock
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductOrdered  $event
     * @return void
     */
    public function handle(ProductOrdered $event)
    {
        if($event->order->description)
        {
            $orderedItems = json_decode($event->order->description);
            foreach ($orderedItems as $value) {
                $product = Product::find($value->id);
                $productQuantity = $product->stock;
                $orderedQuantity = $value->quantity;
                $remainingQuantity = $productQuantity - $orderedQuantity;
                $product->stock = $remainingQuantity;
                $product->save();
            }
        }
    }
}
