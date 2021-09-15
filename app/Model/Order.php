<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Shipment;
use App\Model\Invoice;

class Order extends Model
{
    protected $table = 'orders';


    protected $fillable = [
        'name',
        'street_address',
        'city',
        'phone',
        'email',
        'total_price',
        'description',
        'status',
        'user_id',
    ];
    

    public function shipment()
    {
        return $this->hasOne(Shipment::class);
    }
    
    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }
}
