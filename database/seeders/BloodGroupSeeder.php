<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {

        $table_name = 'blood_groups';

        // Departments seed
        $bloodgroups = [
            'A+',
            'A-',
            'B+',
            'B-',
            'O+',
            'O-',
            'AB+',
            'AB-',
        ];

        $status = false;

        // Check if has table
        if (Schema::hasTable($table_name)) {

            DB::beginTransaction();
            try {
                foreach ($bloodgroups as $bloodgroup) {
                    DB::table($table_name)->insert([
                        'blood_group' => $bloodgroup,
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
        return $status;
    }
}
