<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('admins')->insert([
            [
                'name' => 'huydv',
                'email' => 'huydv01@gmail.com',
                'role' => 1,
                'password' => bcrypt('123456'),
            ]
        ]);
    }
}
