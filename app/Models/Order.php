<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'order_number', 'total_price',
        'first_name', 'last_name', 'email', 'address', 'city', 'postal_code', 'phone', 'status'
    ];

}
