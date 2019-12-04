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
}
