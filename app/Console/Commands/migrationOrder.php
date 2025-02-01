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
                $this->info('Roles table migrated successfully.');
            }
            
            // Migrate the blood group table
            if (!Schema::hasTable('blood_groups')) {
                Artisan::call('migrate', ['--path' => 'database/migrations/2025_02_01_074343_create_blood_groups_table.php']);
                $this->info('Blood group table migrated successfully.');
            }

            // Migrate the companies table
            if (!Schema::hasTable('departments')) {
                Artisan::call('migrate', ['--path' => 'database/migrations/2025_01_26_061811_create_departments_table.php']);
                $this->info('Departments table migrated successfully.');
            }

            // Migrate the roles table
            if (!Schema::hasTable('administratives')) {
                Artisan::call('migrate', ['--path' => 'database/migrations/2025_01_24_114328_create_administratives_table.php']);
                $this->info('Administratives table migrated successfully.');
            }

            // Migrate the quarters table
            if (!Schema::hasTable('operations')) {
                Artisan::call('migrate', ['--path' => 'database/migrations/2025_01_24_114502_create_operations_table.php']);
                $this->info('Operations table migrated successfully.');
            }

            // Migrate the companies table
            if (!Schema::hasTable('patient_cares')) {
                Artisan::call('migrate', ['--path' => 'database/migrations/2025_01_24_114542_create_patient_cares_table.php']);
                $this->info('Patient cares table migrated successfully.');
            }
            
            // Seed default departments
            Artisan::call('db:seed', ['--class' => 'DepartmentSeeder']);
            $this->info('Departments seeded successfully.');
            
            // Seed default roles
            Artisan::call('db:seed', ['--class' => 'RoleSeeder']);
            $this->info('Roles seeded successfully.');
            
            // Seed default roles
            Artisan::call('db:seed', ['--class' => 'BloodGroupSeeder']);
            $this->info('Blood group seeded successfully.');

            Artisan::call('migrate');
            $this->info('All migrations completed.');
        } catch (\Exception $e) {
            Log::emergency($e->getMessage());
            $this->error('Migration process failed. Check logs');
        }
    }
}
