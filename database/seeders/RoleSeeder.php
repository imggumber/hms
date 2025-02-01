<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run()
  {

    $table_name = 'roles';

    // Departments seed
    $roles = [
      'Owner',
      'Admin',
      'Manager',
      'Guest',
    ];

    $status = false;

    // Check if has table
    if (Schema::hasTable($table_name)) {

      DB::beginTransaction();
      try {
        foreach ($roles as $role) {
          DB::table($table_name)->insert([
            'role' => $role,
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
