<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $user = [
        [
        'username' => 'admin',
        'name' => 'Adminnya',
        'email' => 'admin@gmail,com',
        'level' => 'admin',
        'password' => bcrypt('admin123'),
        ],
        [
        'username' => 'guru',
        'name' => 'guru',
        'email' => 'guru@gmail,com',
        'level' => 'editor',
        'password' => bcrypt('123456'),
        ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        } 
    }
}
