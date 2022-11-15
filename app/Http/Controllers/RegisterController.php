<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class RegisterController extends BaseController
{
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:7|max:255'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);
        
        $user = User::create($attributes);

        auth()->login($user);
            
        return redirect('/')->with('Success', 'Your account has been created!');

    }
}