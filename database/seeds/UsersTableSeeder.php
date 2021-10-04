<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$1ihaCVkAId7wVmrOiN8IJugozYoaOreleQH0ITAjUEQ95if1ud7YK',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
