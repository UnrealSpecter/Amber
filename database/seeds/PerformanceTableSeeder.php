<?php

use Illuminate\Database\Seeder;

class PerformanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        DB::table('performances')->insert([
        [
            'name' => 'Performance 1',
            'description' => 'Description of Performance 1',
            'mediaItem' => '1.jpg',
            'show_date' => true,
            'performanceDate' => '2000-01-01'
        ],
        [
            'name' => 'Performance 2',
            'description' => 'Description of Performance 2',
            'mediaItem' => '2.jpg',
            'show_date' => true,
            'performanceDate' => '2002-02-02'
        ],
        [
            'name' => 'Performance 3',
            'description' => 'Description of Performance 3',
            'mediaItem' => '3.jpg',
            'show_date' => true,
            'performanceDate' => '2003-03-03'
        ],
        [
            'name' => 'Performance 4',
            'description' => 'Description of Performance 4',
            'mediaItem' => '4.jpg',
            'show_date' => true,
            'performanceDate' => '2004-04-04'
        ],

        ]);
    }
}
