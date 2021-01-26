<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Str::random(10),
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
        ]);
    }
}
