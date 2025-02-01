<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schedule;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Departments seed
        $genders = [
            'Male',
            'Female',
            'Others',
        ];

        // Migrate departments
        $table_name = 'genders';
        if (Schedule::hasTable($table_name)) {

            DB::beginTransaction();
            try {
                foreach ($genders as $gender) {
                    DB::table($table_name)->insert([
                        'gender' => $gender,
                        'created_at' => Carbon::now(),
                    ]);
                }
                DB::commit();
                $status = true;
            } catch (\Exception $e) {
                DB::rollBack();
                Log::emergency($e->getMessage());
            }
        }
    }
}
