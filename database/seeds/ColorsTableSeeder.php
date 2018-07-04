<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            [
                'name' => 'brown',
            ],
            [
                'name' => 'black',
            ],
            [
                'name' => 'white',
            ],
            [
                'name' => 'red',
            ],
            [
                'name' => 'gray',
            ],
        ]);
    }
}
