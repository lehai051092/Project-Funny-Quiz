<?php


namespace App\Http\Repositories\Eloquent;


use App\Category;
use App\Http\Repositories\CategoryRepositoryInterface;

class CategoryEloquentRepository implements CategoryRepositoryInterface
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category= $category;
    }

    public function getALL()
    {
        return $this->category->all();
    }

    public function save($obj)
    {
        $obj->save();
    }

    public function findById($id)
    {
        return $this->category->findOrFail($id);
    }


    public function delete($obj)
    {
        $obj->delete();
    }
}
