<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{
    public function index(){
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '. $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by '. $author->name;
        }

        return view('posts', [
            "title" => "All Posts ". $title,
            "active" => 'blog',
            // "post" => Post::latest()->get()
            "post" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Post $post){
        return view('contents', [
            "title" => "Blog",
            "active" => 'blog',
            // "post" => Post::find($slug)
            "post" => $post
        ]);
    }

    public function category(){
        return view('categories', [
            'title' => 'Post Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    }
}
