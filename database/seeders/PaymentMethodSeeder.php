<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Departments seed
        $methods = [
            'Cash',
            'Cheque',
            'Credit Card',
            'Debit Card',
            'Net Banking',
            'UPI',
        ];

        // Migrate departments
        $table_name = 'payment_methods';
        if (Schema::hasTable($table_name)) {

            DB::beginTransaction();
            try {
                foreach ($methods as $method) {
                    DB::table($table_name)->insert([
                        'payment_method' => $method,
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
