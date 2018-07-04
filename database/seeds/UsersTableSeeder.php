<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'bob',
                'email' => 'bob@bob.fr',
                'password' => 'bob456987',
            ],
            [
                'name' => 'bobby',
                'email' => 'bobby@bobby.fr',
                'password' => 'bobby456987',
            ],
        ]);
    }
}

