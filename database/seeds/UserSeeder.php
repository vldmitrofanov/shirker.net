<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => config('admin.name'),
            'email' => config('admin.email'),
            'password' => Hash::make(config('admin.password')),
            'email_verified_at' => '2006-05-05 01:01:01',
            'admin' => 1,
            'phone' => '+60 (11) 2711 3327',
            'address' => 'Kuala Lumpur, Malaysia'
        ]);
    }
}
