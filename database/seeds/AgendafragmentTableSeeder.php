<?php

use Illuminate\Database\Seeder;

class AgendafragmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        DB::table('agendafragments')->insert([
        [
            'imagepath' => '1.jpg'
        ],
        [
            'imagepath' => '3.jpg'
        ],
        [
            'imagepath' => '4.jpg'
        ],
        [
            'imagepath' => '2.jpg'
        ]]);
    }
}