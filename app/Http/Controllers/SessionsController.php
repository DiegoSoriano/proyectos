<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        if (! auth()->attempt(request(['email', 'password']))) {
            # code...>
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        } 
        
        return redirect('/blog');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/blog');
    }
}
