<?php

namespace app\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class Helpers
{
    public static function seedDepartments($departments, $table_name)
    {
        $status = false;

        // Check if has table
        if (Schema::hasTable($table_name)) {

            DB::beginTransaction();
            try {
                foreach ($departments as $department) {
                    DB::table($table_name)->insert([
                        'department' => $department,
                        'created_at'   => Carbon::now()
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
