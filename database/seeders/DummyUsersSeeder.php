<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataUser = [
            [
                'name' => 'Operator 1',
                'email' => 'operator1@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'operator',
            ],
            [
                'name' => 'Bendahara 1',
                'email' => 'bendahara1@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'bendahara',
            ],
            [
                'name' => 'Marketing 1',
                'email' => 'marketing1@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => 'marketing',
            ],
        ];

        foreach ($dataUser as $key => $value) {
            User::create($value);
        }
    }
}
