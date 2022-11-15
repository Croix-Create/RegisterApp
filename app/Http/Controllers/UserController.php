<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    
    public function index()
    {   
        return view('users.index', [
            'users' => User::latest()->filter(
                request(['search', 'email', 'name'])
            )->paginate(6)->withQueryString()
        ]);
    }

    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }
}
