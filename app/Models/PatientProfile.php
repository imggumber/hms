<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PatientProfile extends Model
{
    protected $table = 'patient_profiles';

    protected $fillable = [
        'home_address',
        'contact_number',
        'emergency_contact_number',
        'gender_id',
        'blood_group_id',
        'patient_id',
    ];
}
