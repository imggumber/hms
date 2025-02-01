<?php

namespace Database\Seeders;

use app\Helpers\Helpers;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run()
  {

    $table_name = 'roles';
    $table_column = 'role';
    $roles = [
      'Owner',
      'Admin',
      'Manager',
      'Guest',
    ];

    $seed = new Helpers();
    $seed->seedData($roles, $table_name, $table_column);
  }
}
