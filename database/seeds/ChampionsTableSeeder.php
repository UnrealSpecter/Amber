<?php

use Illuminate\Database\Seeder;

class ChampionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        DB::table('champions')->insert([
            'name' => 'Braum',
        ]);
        
        DB::table('champions')->insert([
            'name' => 'Anivia',
        ]);
    }
}
