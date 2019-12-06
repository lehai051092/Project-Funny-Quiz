<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Services\CategoryServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService= $categoryService;
    }

    public function getALL()
    {
        $categories = $this->categoryService->getALL();
        return view('categories.list', compact('categories'));
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $this->categoryService->create($request);
        return redirect()->route('categories.list');
    }

    public function destroy($id){
        $this->categoryService->delete($id);
        return redirect()->route('categories.list');
    }

}
