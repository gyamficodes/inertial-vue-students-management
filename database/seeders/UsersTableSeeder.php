<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Users = [
        'name' => 'admin',
        'email' => 'admin@admin.com',
         'passworld' => bcrypt('passworld'),
        ];

        User::insert($Users);
    }
}