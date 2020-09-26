<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category', compact('categories'));
    }

    public function create()
    {
        $category = new Category();
        $category->name = 'JavaScript';
        $category->save();

        $posts = [1, 3, 4]; // Post id
        $category->myPosts()->sync($posts);

        return redirect()->route('categories.index');
    }

    public function edit()
    {
        $category = Category::findOrFail(5); // id of 5th category

        $posts = [2, 4]; // Post id
        $category->myPosts()->sync($posts);

        return redirect()->route('categories.index');
    }
}
