<?php

use Illuminate\Database\Seeder;

class NumbersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('numbers')->insert([
            [
                'number' => '4',
            ],
            [
                'number' => '6',
            ],
            [
                'number' => '10',
            ],
            [
                'number' => '15',
            ],
            [
                'number' => '20',
            ],
        ]);
    }
}
