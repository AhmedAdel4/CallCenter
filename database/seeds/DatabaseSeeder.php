<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // DB::table('employees')->insert([
        //     'name' => 'Ahmed Hafez',
        //     'password' => Hash::make('123456'),
        //     'email' => 'ahmed@yahoo.com',
        //     'phone' => '12345',
        // ]);

        DB::table('admins')->insert([
            'name' => 'Ahmed Mohamed',
            'password' => Hash::make('123456'),
            'email' => 'ahmed@yahoo.com',
        ]);
    }
}
