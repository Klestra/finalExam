<?php

use Illuminate\Database\Seeder;

class InstrumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instruments')->insert([
            [
                'title' => 'ESP E II HORIZON',
                'excerpt' => 'Guitare électrique',
                'price' => '1659',
                'colors_id' => 2,
            ],
            [
                'title' => 'SCHECTER DEMON',
                'excerpt' => 'Guitare électrique',
                'price' => '539',
                'colors_id' => 2,
            ],
            [
                'title' => 'SIGMA ',
                'excerpt' => 'Guitare acoustique',
                'price' => '315',
                'colors_id' => 1,
            ],
            [
                'title' => 'MATON',
                'excerpt' => 'Guitare acoustique',
                'price' => '1899',
                'colors_id' => 3,
            ],
            [
                'title' => 'BIRD',
                'excerpt' => 'Piano numérique',
                'price' => '379',
                'colors_id' => 3,
            ],
            [
                'title' => 'NATIVE',
                'excerpt' => 'Piano',
                'price' => '925',
                'colors_id' => 2,
            ],
            [
                'title' => 'EAGLETONE HADES',
                'excerpt' => 'Batteries',
                'price' => '399',
                'colors_id' => 4,
            ],
            [
                'title' => 'LUDWIG ',
                'excerpt' => 'Batteries',
                'price' => '999',
                'colors_id' => 5,
            ],
            [
                'title' => 'SIRE MARCUS MILLER',
                'excerpt' => 'Basse électrique',
                'price' => '715',
                'colors_id' => 1,
            ],
            [
                'title' => 'LTD GUITARS',
                'excerpt' => 'Basse électrique',
                'price' => '649',
                'colors_id' => 5,
            ],
        ]);
    }
}

