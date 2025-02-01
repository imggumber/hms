<?php

namespace Database\Seeders;

use app\Helpers\Helpers;
use Illuminate\Database\Seeder;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $table_name = 'blood_groups';
        $table_column = 'blood_group';
        $bloodgroups = ['A+','A-','B+','B-','O+','O-','AB+','AB-'];

        $seed = new Helpers();
        $seed->seedData($bloodgroups, $table_name, $table_column);
    }
}
