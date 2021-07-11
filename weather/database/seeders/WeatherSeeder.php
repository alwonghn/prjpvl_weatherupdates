<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weather')->insert([
            'sensor_id' => 8,
            'temperature' => 29.29,
            'humidity' => 88.88,
        ]);
    }
}
