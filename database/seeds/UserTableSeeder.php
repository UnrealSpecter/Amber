<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
    {
        DB::table('users')->insert([
            'name' => 'Amber',
            'email' => 'amberrozema@gmail.com',
            'password' => Hash::make('Amber0591')
        ]);
        DB::table('users')->insert([
            'name' => 'Tomi',
            'email' => 'tomi_emmen@hotmail.com',
            'password' => Hash::make('t01o05m93i')
        ]);
    }
}
