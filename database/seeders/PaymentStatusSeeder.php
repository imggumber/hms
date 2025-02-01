<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Departments seed
        $statuses = [
            'Pending',
            'Success',
            'Failed'
        ];

        // Migrate departments
        $table_name = 'payment_statuses';
        if (Schema::hasTable($table_name)) {

            DB::beginTransaction();
            try {
                foreach ($statuses as $st) {
                    DB::table($table_name)->insert([
                        'payment_status' => $st,
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
