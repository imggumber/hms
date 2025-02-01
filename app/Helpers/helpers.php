<?php

namespace app\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;

class Helpers
{
  // Import data
  protected function importSeed($data, $table_name, $table_column)
  {
    if (Schema::hasTable($table_name)) {

      DB::beginTransaction();
      try {
        foreach ($data as $dt) {
          DB::table($table_name)->insert([
            $table_column => $dt,
            'created_at' => Carbon::now()
          ]);
        }
        DB::commit();
      } catch (\Exception $e) {
        DB::rollBack();
        Log::emergency($e->getMessage());
      }
    }
  }

  public function seedData($data, $table_name, $table_column)
  {
    return $this->importSeed($data, $table_name, $table_column);
  }
}
