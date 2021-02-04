<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@naturalenergy.com',
            'email_verified_at' => now(),
            'password' => Hash::make('JPfUBe7MvnGEtHch'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
