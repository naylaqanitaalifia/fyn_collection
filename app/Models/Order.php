<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'service_id',
        'order_status',
        'order_note',
        'payment_proof',
        'total_price',
        'completed_date'
    ];
}
