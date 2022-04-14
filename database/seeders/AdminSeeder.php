<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->updateOrInsert([
            'id' => 0,
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'username' => 'admin',
            'role' => 'admin',
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'address' => 'ADMIN'
        ]);
    }
}
