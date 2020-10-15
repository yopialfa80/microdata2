<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            [
            'name' => 'administrator',
            'username' => 'admin',
            'email' => 'admin@kabupaten.com',
            'address' => 'Jl. Jalan',
            'email_verified_at' => NULL,
            'hak_akses' => 'super admin',
            'phone' => '08988662535',
            'password' => '$2y$10$92JkT2fvOvYi3qPm//ClfOY6qgWZ8IoVfJ/Df6sAhlZ6Bs6X6aGI2',
            'remember_token' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            ],
            [
            'name' => 'admin2',
            'username' => 'admin2',
            'email' => 'admin@kabupaten2.com',
            'address' => 'admin2',
            'email_verified_at' => NULL,
            'hak_akses' => 'super admin',
            'phone' => '08988662535',
            'password' => '$2y$10$wtGqGshzCduj7MrBRMMb5u/GhZ7yQ/SAFztGscJ8XM3vaKIQe/xq2',
            'remember_token' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            ],
            [
            'name' => 'admin view',
            'username' => 'admin view',
            'email' => 'admin@view.com',
            'address' => 'Jl.View',
            'email_verified_at' => NULL,
            'hak_akses' => 'admin view',
            'phone' => '089898989',
            'password' => '$2y$10$957Iq4pUpvcvQgs6nm6bv.ulsRbUglpkssqjw5WbeBCwC6EgWgK1q',
            'remember_token' => NULL,
            'created_at' => NULL,
            'updated_at' => NULL,
            ],

        ]);
    }
}