<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Order;

class Shipment extends Model
{
    protected $table = 'shipments';

    protected $fillable = [
        'order_id'
    ];


    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
