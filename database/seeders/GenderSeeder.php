<?php

namespace Database\Seeders;

use app\Helpers\Helpers;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $table_name = 'genders';
        $table_column = 'gender';
        $genders = ['Male','Female','Others'];

        $seed = new Helpers();
        $seed->seedData($genders, $table_name, $table_column);
    }
}
