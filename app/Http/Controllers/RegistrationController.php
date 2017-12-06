<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
            'permiso' => 'required'
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'permiso' => request('permiso'),
            'password' => bcrypt(request('password'))

        ]);

        auth()->login($user);

        return redirect('/blog');
    }
}
