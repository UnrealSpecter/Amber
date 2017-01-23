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
            'categoryName' => 'Werkervaring'
        ],
        [
            'categoryName' => 'Opleiding'
        ],
        [
            'categoryName' => 'Activiteiten'
        ],
        [
            'categoryName' => 'Cursussen'
        ],
        [
            'categoryName' => 'Competenties'
        ],
        [
            'categoryName' => 'Interesses en Overige'
        ]]);
    }
}
