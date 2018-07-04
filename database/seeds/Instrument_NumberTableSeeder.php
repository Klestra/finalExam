<?php

use Illuminate\Database\Seeder;

class Instrument_NumberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instrument_number')->insert([
            [
                'instrument_id' => 1,
                'number_id' => 1,
            ],
            [
                'instrument_id' => 2,
                'number_id' => 3,
            ],
            [
                'instrument_id' => 3,
                'number_id' => 1,
            ],
            [
                'instrument_id' => 4,
                'number_id' => 3,
            ],
            [
                'instrument_id' => 5,
                'number_id' => 4,
            ],
            [
                'instrument_id' => 6,
                'number_id' => 2,
            ],
            [
                'instrument_id' => 7,
                'number_id' => 5,
            ],
            [
                'instrument_id' => 8,
                'number_id' => 3,
            ],
            [
                'instrument_id' => 9,
                'number_id' => 1,
            ],
            [
                'instrument_id' => 10,
                'number_id' => 2,
            ],  
        ]); 
    }
}
