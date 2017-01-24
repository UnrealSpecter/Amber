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
            'name' => 'admin',
            'email' => 'admin@admin.test',
            'password' => Hash::make('topkek')
        ]);
        DB::table('users')->insert([
            'name' => 'Tomi',
            'email' => 'admin@dank.test',
            'password' => Hash::make('unrealspecter')
        ]);
    }
}
