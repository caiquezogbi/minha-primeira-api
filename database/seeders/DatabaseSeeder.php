<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(ProductTableSeeder::class);

        // $this->call([
        //     ProductTableSeeder::class

        // ]);


        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('products')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // DB::table('products')->insert([
        //     'name' => Str::random(10),
        //     'price' => Str::random(10),
        //     'description' => Str::random(30),
        //     'slug' => Str::random(10),
        // ]);
    }
}
