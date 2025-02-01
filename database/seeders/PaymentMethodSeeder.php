<?php

namespace Database\Seeders;

use app\Helpers\Helpers;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $table_name = 'payment_methods';
        $table_column = 'payment_method';
        $methods = ['Cash','Cheque','Credit Card','Debit Card','Net Banking','UPI'];

        $seed = new Helpers();
        $seed->seedData($methods, $table_name, $table_column);
    }
}
