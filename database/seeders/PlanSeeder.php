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
                    'wifi' => 'sim',
                    'games' => 'não',
                    'movies' => 'não',
                    'speed' => 200,
                    'giga' => 'não',
                    'best' => 'sim',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 2,
                    'price' => 149.99,
                    'wifi' => 'sim',
                    'games' => 'sim',
                    'movies' => 'não',
                    'speed' => 400,
                    'giga' => 'sim',
                    'best' => 'não',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
                [
                    'id' => 3,
                    'price' => 399.99,
                    'wifi' => 'sim',
                    'games' => 'sim',
                    'movies' => 'sim',
                    'speed' => 1,
                    'giga' => 'sim',
                    'best' => 'não',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]
        );
    }
}
