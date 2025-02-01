<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubDepartment extends Model
{
    //table
    protected $table = 'sub_departments';

    // fillables
    protected $fillable = [
        'sub_department',
        'department_id',
    ];
}
