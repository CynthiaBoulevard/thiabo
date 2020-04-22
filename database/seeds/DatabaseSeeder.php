<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


       $user = [
            [
                'name' => 'thiabo',
                'email' => 'thiabo@gmail.com',
                'is_admin' => '1',
                'password' => bcrypt('thiabo97437'),
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);

        // $this->call(UserSeeder::class);
    }

}

}
