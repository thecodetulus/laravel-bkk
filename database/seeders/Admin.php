<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB ::table('level')->insert([
            [
                'id_level' => 1,
                'nama_level' => 'Admin'
            ]
        ]);

        DB::table('admin')->insert([
            [
                'id_admin' => 1,
                'nama_admin' => 'admin@gmail.com',
                'id_level' => 1,
                'password' => Hash::make('admin123')
            ]
        ]);
    }
}
