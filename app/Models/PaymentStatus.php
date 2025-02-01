<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentStatus extends Model
{
    //table
    protected $table = 'payment_statuses';

    // fillables
    protected $fillable = [
        'payment_status', 
    ];
}
