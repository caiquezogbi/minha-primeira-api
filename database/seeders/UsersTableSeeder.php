<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()                         //adicionando usuarios fakes no banco de dados na tabela users
    {
        User::factory()
            ->count(5)
            ->hasPosts(1)
            ->create();
    }
}
