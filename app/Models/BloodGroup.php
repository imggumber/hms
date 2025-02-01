<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BloodGroup extends Model
{
  //protected table
  protected $table = 'blood_groups';

  // fillables
  protected $fillable = [
    'blood_group',
  ];

  
}
