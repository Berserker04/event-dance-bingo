<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuerSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name" => "Yila",
            "email" => "yila@gmail.com",
            "password" => Hash::make('1234'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table("users")->insert([
            "name" => "Liss",
            "email" => "liss@gmail.com",
            "password" => Hash::make('1234'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table("users")->insert([
            "name" => "Angi",
            "email" => "angi@gmail.com",
            "password" => Hash::make('1234'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table("users")->insert([
            "name" => "Lizz",
            "email" => "lizz@gmail.com",
            "password" => Hash::make('1234'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table("users")->insert([
            "name" => "Carlos",
            "email" => "carlos@gmail.com",
            "password" => Hash::make('1234'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
