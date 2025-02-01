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
        
        $table_name = 'departments';
        $table_column = 'department';
        $departments = [
            'Administrations',
            'Operations',
            'Patient Care'
        ];
        
        $seed = new Helpers();
        $seed->seedData($departments, $table_name, $table_column);
    }
}
