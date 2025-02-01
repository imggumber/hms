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
      /**
       * Independent tables
       */
      if (!Schema::hasTable('genders')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/2025_02_01_132325_create_genders_table.php']);
        Artisan::call('db:seed', ['--class' => 'GenderSeeder']);
        $this->info('Genders table migrated successfully.');
      }

      if (!Schema::hasTable('roles')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/2025_02_01_072107_create_roles_table.php']);
        Artisan::call('db:seed', ['--class' => 'RoleSeeder']);
        $this->info('Roles table migrated successfully.');
      }

      if (!Schema::hasTable('blood_groups')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/2025_02_01_074343_create_blood_groups_table.php']);
        Artisan::call('db:seed', ['--class' => 'BloodGroupSeeder']);
        $this->info('Blood group table migrated successfully.');
      }

      if (!Schema::hasTable('departments')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/2025_01_26_061811_create_departments_table.php']);
        Artisan::call('db:seed', ['--class' => 'DepartmentSeeder']);
        $this->info('Departments table migrated successfully.');
      }

      if (!Schema::hasTable('designations')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/2025_02_01_085339_create_designations_table.php']);
        $this->info('Designation migrated successfully.');
      }

      if (!Schema::hasTable('payment_statuses')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/2025_02_01_114027_create_payment_statuses_table.php']);
        Artisan::call('db:seed', ['--class' => 'PaymentStatusSeeder']);
        $this->info('Payment status migrated successfully.');
      }
      
      if (!Schema::hasTable('payment_methods')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/2025_02_01_114720_create_payment_methods_table.php']);
        Artisan::call('db:seed', ['--class' => 'PaymentMethodSeeder']);
        $this->info('Payment methods migrated successfully.');
      }

      /**
       * Dependent tables
       */
      if (!Schema::hasTable('sub_departments')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/2025_02_01_093153_create_sub_departments_table.php']);
        $this->info('Sub-departments table migrated successfully.');
      }
      
      if (!Schema::hasTable('users')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/0001_01_01_000000_create_users_table.php']);
        $this->info('Users table migrated successfully.');
      }
      
      if (!Schema::hasTable('profiles')) {
        Artisan::call('migrate', ['--path' => 'database/migrations/2025_02_01_152555_create_profiles_table.php']);
        $this->info('Sub-departments table migrated successfully.');
      }

      /**
       * Default tables
       */
      Artisan::call('migrate');
      $this->info('All migrations completed.');
    } catch (\Exception $e) {
      Log::emergency($e->getMessage());
      $this->error('Migration process failed. Check logs');
    }
  }
}
