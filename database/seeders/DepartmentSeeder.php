<?php

namespace Database\Seeders;

use app\Helpers\Helpers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Administration seed
        $administrations = [
            'Management',
            'Human Resources',
            'Finance and Billing',
            'IT Department',
            'Legal and Compliance',
            'Public Relations',
        ];
        Helpers::seedDepartments($administrations, 'administratives');
    }
}
