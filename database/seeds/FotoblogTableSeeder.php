<?php

use Illuminate\Database\Seeder;

class FotoblogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        DB::table('fotoblogs')->insert([
            'title' => 'Foto 1',
            'description' => 'Dit is foto 1',
            'image' => '1.jpg',
        ]);
        DB::table('fotoblogs')->insert([
            'title' => 'Foto 2',
            'description' => 'Dit is foto 2',
            'image' => '2.jpg',
        ]);
        DB::table('fotoblogs')->insert([
            'title' => 'Foto 3',
            'description' => 'Dit is foto 3',
            'image' => '3.jpg',
        ]);
        DB::table('fotoblogs')->insert([
            'title' => 'Foto 4',
            'description' => 'Dit is foto 4',
            'image' => '4.jpg',
        ]);
    }
}
