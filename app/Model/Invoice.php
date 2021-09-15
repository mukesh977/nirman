<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Order;


class Invoice extends Model
{
    protected $table = 'invoices';
    
    protected $fillable = [
        'order_id'
    ];


    public function order()
    {
        return $this->belongsTo(Order::class);        
    }


}
