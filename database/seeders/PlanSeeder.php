<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('plans')->insert(
            [
                [
                    'id' => 1,
                    'price' => 99.99,
                    'wifi' => true,
                    'games' => false,
                    'movies' => false,
                    'speed' => 200,
                    'mega' => true,
                    'giga' => false,
                    'best' => true,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 2,
                    'price' => 149.99,
                    'wifi' => true,
                    'games' => true,
                    'movies' => false,
                    'speed' => 400,
                    'mega' => true,
                    'giga' => false,
                    'best' => false,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 3,
                    'price' => 399.99,
                    'wifi' => true,
                    'games' => true,
                    'movies' => true,
                    'speed' => 1,
                    'mega' => false,
                    'giga' => true,
                    'best' => false,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
    }
}
