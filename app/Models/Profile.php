<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //table
    protected $table = 'profiles';

    // fillables
    protected $fillable = [
        'home_address',
        'primary_contact_number',
        'emergency_contact_number',
        'user_id',
        'blood_group_id',
        'designation_id',
        'department_id',
        'sub_department_id',
    ];
}
