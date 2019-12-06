<?php


namespace App\Http\Services\Impl;


use App\Category;
use App\Http\Repositories\CategoryRepositoryInterface;
use App\Http\Services\CategoryServiceInterface;
use Illuminate\Support\Facades\File;

class CategoryImplService implements CategoryServiceInterface
{
    protected $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getALL()
    {
        return $this->categoryRepository->getALL();
    }

    public function create($request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->title = $request->title;
        if (!$request->hasFile('image')) {
            $category->image = $request->image;
        } else {
            $image = $request->file('image');
            $path = $image->store('image', 'public');
            $category->image = $path;
        }

        $this->categoryRepository->save($category);
    }

    public function findById($id)
    {
        return $this->categoryRepository->findById($id);
    }

    public function delete($id)
    {
        $category = $this->categoryRepository->findById($id);
        if(file_exists(storage_path("/app/public/$category->image"))){
            File::delete(storage_path("/app/public/$category->image"));
        }
        $this->categoryRepository->delete($category);
    }
}
