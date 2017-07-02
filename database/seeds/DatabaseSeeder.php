<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(FotoblogTableSeeder::class);
        $this->call(WorkTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CVCategoryTableSeeder::class);
        $this->call(CVTableSeeder::class);
        $this->call(PerformanceTableSeeder::class);
        // $this->call(AgendafragmentTableSeeder::class);
    }
}
