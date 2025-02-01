<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

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
        if (Schema::hasTable($table_name)) {

            DB::beginTransaction();
            try {
                foreach ($departments as $department) {
                    DB::table($table_name)->insert([
                        'department' => $department,
                        'created_at' => Carbon::now()
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
