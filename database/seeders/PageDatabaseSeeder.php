<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class PageDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Schema::drop('countries');
        Schema::drop('cities');

        $arrays = ['RzxLm_HWhbI$$/countries.sql' ,'RzxLm_HWhbI$$/cities.sql'];
        foreach ($arrays as $array) {
            $path = public_path($array);
            $sql = file_get_contents($path);
            DB::unprepared($sql);
        }

    }
}
