<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;

class BlogController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $blogs = Blog::latest()->get();
        
        return view('blog.index', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }

    public function create()
    {
        return view('blog.create');
    }

    public function store()
    {
            $this->validate(request(), [
                'title' => 'required|min:5|max:50',
                'body' => 'required|min:5',
                'mision' => 'required|min:5',
                'vision' => 'required|min:5',
                'objetivo' => 'required|min:5',
                'integrantes' => 'required|min:5'
            ]);
        
        // $blog = new Blog; // Not even necessary with the actual method

        // First method:
        // $blog->title = request('title');
        // $blog->body = request('body');
        // $blog->save();
        
        // Second method:
        // Blog::create([
        //     'title' => request('title'),
        //     'body' => request('body')
        // ]);

        auth()->user()->publish(
            new Blog(request(['title', 'body', 'mision', 'vision', 'objetivo', 'integrantes']))
        );

        return redirect('/blog');
    }
}

