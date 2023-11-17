<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index() 
    {
        // return Category::all();

        return view('categories/index', [
            'categories' => Category::all(),
        ]);
    }

    public function create() 
    {
        $category = new Category();
        $category->name = 'Action';
        $category->save(); // INSERT INTO....en Laravel

        return redirect('/categories');
    }
}
