<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class migrationOrder extends Command
{
  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'app:migration-order';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'Command description';

  /**
   * Execute the console command.
   */
  public function handle()
  {
    $this->info('Starting migration process');

    try {
      // Migrate the roles table
      if (!Schema::hasTable('roles')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/2025_02_01_072107_create_roles_table.php']);
        Artisan::call('db:seed', ['--class' => 'RoleSeeder']);
        $this->info('Roles table migrated successfully.');
      }

      // Migrate the blood group table
      if (!Schema::hasTable('blood_groups')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/2025_02_01_074343_create_blood_groups_table.php']);
        Artisan::call('db:seed', ['--class' => 'BloodGroupSeeder']);
        $this->info('Blood group table migrated successfully.');
      }

      // Migrate the companies table
      if (!Schema::hasTable('departments')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/2025_01_26_061811_create_departments_table.php']);
        Artisan::call('db:seed', ['--class' => 'BloodGroupSeeder']);
        $this->info('Departments table migrated successfully.');
      }
      
      // Migrate the designation table
      if (!Schema::hasTable('designations')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/2025_02_01_085339_create_designations_table.php']);
        Artisan::call('db:seed', ['--class' => 'DepartmentSeeder']);
        $this->info('Designation migrated successfully.');
      }

      Artisan::call('migrate');
      $this->info('All migrations completed.');
    } catch (\Exception $e) {
      Log::emergency($e->getMessage());
      $this->error('Migration process failed. Check logs');
    }
  }
}
