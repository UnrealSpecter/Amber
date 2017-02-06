<?php

use Illuminate\Database\Seeder;

class WorkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
    	DB::table('works')->insert([
        [
            'title' => 'Work 1',
            'dimensions' => 'Dimensions of Work 1',
            'imagepath' => '1.jpg',
            'workDate' => '2001-01-01'
        ],
        [
            'title' => 'Work 2',
            'dimensions' => 'Dimensions of Work 2',
            'imagepath' => '2.jpg',
            'workDate' => '2002-02-02'
        ],
        [
            'title' => 'Work 3',
            'dimensions' => 'Dimensions of Work 3',
            'imagepath' => '3.jpg',
            'workDate' => '2003-03-03'
        ],
        [
            'title' => 'Work 4',
            'dimensions' => 'Dimensions of Work 4',
            'imagepath' => '4.jpg',
            'workDate' => '2004-04-04'
        ],
        [
            'title' => 'Work 5',
            'dimensions' => 'Dimensions of Work 5',
            'imagepath' => '5.jpg',
            'workDate' => '2005-05-05'
        ],
        [
            'title' => 'Work 6',
            'dimensions' => 'Dimensions of Work 6',
            'imagepath' => '6.jpg',
            'workDate' => '2006-06-06'
        ],
        [
            'title' => 'Work 7',
            'dimensions' => 'Dimensions of Work 7',
            'imagepath' => '7.jpg',
            'workDate' => '2007-07-07'
        ],
        [
            'title' => 'Work 8',
            'dimensions' => 'Dimensions of Work 8',
            'imagepath' => '8.jpg',
            'workDate' => '2008-08-08'
        ],
        [
            'title' => 'Work 9',
            'dimensions' => 'Dimensions of Work 9',
            'imagepath' => '9.jpg',
            'workDate' => '2009-09-09'
        ],
        ]);
    }   
}