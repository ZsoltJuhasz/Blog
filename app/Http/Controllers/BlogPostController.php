<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogPostController extends Controller
{
    public function index(){
        $posts = BlogPost::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
        
    }

    public function show(BlogPost $blogPost){
        
        return view('posts.show', ['post' => $blogPost]);
    }

    public function edit(BlogPost $blogPost){

    }

    public function update(Request $request, BlogPost $blogPost){

    }

    public function remove(BlogPost $blogPost){

    }

    
}
