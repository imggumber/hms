<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  //protected table
  protected $table = 'roles';

  // fillables
  protected $fillable = [
    'role',
  ];
}
