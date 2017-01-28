<?php

use Illuminate\Database\Seeder;

class CVTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        DB::table('cv')->insert([
        [
            'category_id' => 1,
            'leftSide' => '2014 - 2015',
            'rightSide' => 'Vooropleiding Theater, De Noorderlingen, te Groningen'
        ],
        [
            'category_id' => 1,
            'leftSide' => '2010 - 2016',
            'rightSide' => 'VWO-opleiding, C&M-profiel Esdal College Oosterstraat, te Emmen'
        ],
        [
            'category_id' => 2,
            'leftSide' => '2016 - 2017',
            'rightSide' => 'Analoge Websites'
        ],
        [
            'category_id' => 3,
            'leftSide' => '2015',
            'rightSide' => 'TV Serie: A"dam - E. V. A. Producent: NTR, VPRO en VARA Regisseur: Norbert ter Hall'
        ],
        [
            'category_id' => 3,
            'leftSide' => '2015',
            'rightSide' => 'Pinokkio Noord Nederlands Toneel Regisseur: Peter Vandemeulebroecke'
        ],
        [ 
            'category_id' => 3,
            'leftSide' => 'Mei 2014',
            'rightSide' => 'Baal'  
        ],
        [ 
            'category_id' => 3,
            'leftSide' => 'Maart 2015',
            'rightSide' => 'Toneelgroep Oostpool Regisseur: Timothy de gilde'  
        ]]);
    }
}
