<?php

use Illuminate\Database\Seeder;

class CVCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        DB::table('cvcategories')->insert([
        [
            'categoryName' => 'Opleidingen'
        ],
        [
            'categoryName' => 'Kunstprojecten'
        ],
        [
            'categoryName' => 'Theaterprojecten en -producties'
        ],
        [
            'categoryName' => 'Exposities'
        ]]);
    }
}
