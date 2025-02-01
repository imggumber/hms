<?php

namespace Database\Seeders;

use app\Helpers\Helpers;
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

        // Migrate departments
        $table_name = 'departments';
        $table_column = 'department';

        $seed = new Helpers();
        $seed->seedData($departments, $table_name, $table_column);
    }
}
