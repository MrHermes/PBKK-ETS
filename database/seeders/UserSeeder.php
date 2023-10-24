<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\fake;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $jenis = [
                'name' => 'fred',
            'email' => 'fred@gmail.com',
            'email_verified_at' => now(),
            'password' => 'Fred1234', // password
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at'=> now(),
            ];
            DB::table('users')->insert($jenis);
    }
}