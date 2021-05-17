<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => 'gi',
        ]);
        DB::table('services')->insert([
            'name' => 'tm',
        ]);
        DB::table('services')->insert([
            'name' => 'ga',
        ]);
    }
}
