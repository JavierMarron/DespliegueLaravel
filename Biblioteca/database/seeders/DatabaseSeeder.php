<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'usuario' => 'jmarram',
            'clave' => Str::random(50),
            'name' => 'javi',
            'surname' => 'marrón de llano ramírez',
            'password' => '11112003',
            'role' => 'admin'
        ]);
    }
}
