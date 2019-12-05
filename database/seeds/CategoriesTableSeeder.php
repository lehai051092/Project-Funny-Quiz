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
        $category->title = 'Thể thao có hại cho sức khỏe';
        $category->image = 'storage/images/categoryImg/anh1.jpg';
        $category->save();

        $category = new Category();
        $category->name = 'Giải Trí';
        $category->title = 'Giải Trí có hại cho sức khỏe';
        $category->image = 'storage/images/categoryImg/anh2.jpg';
        $category->save();

         $category = new Category();
        $category->name = 'Nấu Ăn';
        $category->title = 'Nấu Ăn có hại cho sức khỏe';
        $category->image = 'storage/images/categoryImg/anh2.jpg';
        $category->save();


    }
}
