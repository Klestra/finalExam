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
        $this->call(ColorsTableSeeder::class);
        $this->call(InstrumentsTableSeeder::class);
        $this->call(NumbersTableSeeder::class);
        $this->call(Instrument_NumberTableSeeder::class);
    }
}
