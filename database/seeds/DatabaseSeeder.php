<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\User::create(
            [
                'name' => 'Bernard',
                'email' => 'bernard@gmail.com',
                'password' => bcrypt('beber'),
            ]
        );
        // $this->call(UserSeeder::class);
    }
}
