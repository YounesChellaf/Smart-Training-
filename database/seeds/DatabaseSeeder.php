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
        \App\User::create([
            'name'=>'younes',
            'email'=>'admin@admin',
            'password'=>bcrypt('root')
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
