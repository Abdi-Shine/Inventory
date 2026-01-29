<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stats')->insert([
            [
                'title' => 'Happy Clients',
                'count' => '1700',
                'icon' => 'fas fa-users',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Projects Completed',
                'count' => '2300',
                'icon' => 'fas fa-rocket',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Professional Staff',
                'count' => '700',
                'icon' => 'fas fa-user-tie',
                'created_at' => Carbon::now(),
            ],
            [
                'title' => 'Year Experienced',
                'count' => '15',
                'icon' => 'fas fa-medal',
                'created_at' => Carbon::now(),
            ],
             [
                'title' => 'Countries',
                'count' => '7',
                'icon' => 'fas fa-globe-africa',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
