<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void b
     */
    public function run()
    {
         $this->call(CategoriesTableSeeder::class);
         $this->call(QuestionsTableSeeder::class);
         $this->call(UserTableSeeder::class);
    }
}
