<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function getALL()
    {
        $categories = Category::all();
        return view('categories.list', compact('categories'));
    }

    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
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

        $category->save();
        return redirect()->route('categories.list');
    }

    public function destroy($id){
        $category = Category::findOrFail($id);
        if(file_exists(storage_path("/app/public/$category->image"))){
            File::delete(storage_path("/app/public/$category->image"));
        }
        $category->delete();

        return redirect()->route('categories.list');
    }

}
