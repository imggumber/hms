<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    //table
    protected $table = 'payment_methods';

    // fillables
    protected $fillable = [
        'payment_method', 
    ];
}
