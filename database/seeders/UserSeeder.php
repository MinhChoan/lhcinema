<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            "username" => "admin",
            "name" => "Administrator",
            "email"=> "admin@admin.com",
            "password"=> Hash::make("9ev@*&JgcwA4xgm"),
            "role"=> "admin",
            "user_status_id"=> "1"
        ]);
    }
}
