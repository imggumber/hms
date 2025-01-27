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
        // Departments seed
        $departments = [
            'Administrations',
            'Operations',
            'Patient Care'
        ];
        Helpers::seedDepartments($departments, 'departments');
    }
}
