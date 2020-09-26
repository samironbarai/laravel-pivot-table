<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post', compact('posts'));
    }

    public function create()
    {
        $post = new  Post();
        $post->title = 'This is 5th post';
        $post->save();

        // $categories = [2, 3, 4]; // Insert this categories with this post
        $categories = [
            2 => ['extra_field' => 'test 2'],
            3 => ['extra_field' => 'test 3'],
        ];
        $post->categories()->sync($categories);

        return redirect()->route('posts.index');
    }

    public function edit()
    {
        $post = Post::findOrFail(4); // Id of 4th post
        // $categories = [1, 2, 4]; // Remove 3 and add 1 category id
        $categories = [
            1 => ['extra_field' => 'test 1'],
            4 => ['extra_field' => 'test 4'],
        ];
        $post->categories()->sync($categories);

        return redirect()->route('posts.index');
    }
}
