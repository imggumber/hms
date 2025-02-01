<?php

namespace Database\Seeders;

use app\Helpers\Helpers;
use Illuminate\Database\Seeder;

class PaymentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $table_name = 'payment_statuses';
        $table_column = 'payment_status';
        $statuses = ['Pending','Success','Failed'];

        $seed = new Helpers();
        $seed->seedData($statuses, $table_name, $table_column);
    }
}
