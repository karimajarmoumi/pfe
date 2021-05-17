<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'role_id' => 1,
            'service_id' => 1,
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'gest',
            'role_id' => 2,
            'service_id' => 2,
            'email' => 'gest@gest.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'chef',
            'role_id' => 3,
            'service_id' => 3,
            'email' => 'chef@chef.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'membre',
            'role_id' => 4,
            'service_id' => 2,
            'email' => 'membre@membre.com',
            'password' => bcrypt('password'),
        ]);
    }
}
