<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'Thể Thao';
        $category->save();

        $category = new Category();
        $category->name = 'Giải Trí';
        $category->save();
    }
}
