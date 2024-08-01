<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $fields =$request->validate([
            'name'=> ['required','max:255'],
            'email'=> ['required','email', 'max:255', 'unique:users'],
            'password'=> ['required','min:6', 'confirmed'],
        ]);
        $user = User::create($fields);
        Auth::login($user);
        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        dd($request->all());
    }
}
