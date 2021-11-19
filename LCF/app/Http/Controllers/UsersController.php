<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UsersController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }
    public function register(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',


        ]);
        $validated["password"] = Hash::make($validated["password"]);
        $users = User::create($validated);
        Auth::login($users);
    }
}
