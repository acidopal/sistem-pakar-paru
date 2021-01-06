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
    	 DB::table('users')->insert([
            'nama' => 'Admin',
            'no_telepon' => '081231923123',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
