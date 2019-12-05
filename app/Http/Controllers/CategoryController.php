<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getALL()
    {
        $categories = Category::all();
        return view('categories.list', compact('categories'));
    }

    public function create(){
        return view('categories.create',compact('categories'));
    }

    public function store(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categories.list');
    }

    public function destroy($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('categories.list');
    }

}
