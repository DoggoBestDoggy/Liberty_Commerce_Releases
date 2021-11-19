<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Users;
use GuzzleHttp\Promise\Create;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UsersController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }
    public function register(Request $request)
    {
        dd($request);
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required_withpassword|same:password|min:6',

        ]);

        $users = Users::create([
            'name' => $request['name'],
            'email', $request['email'],
            'password', $request['password'],

        ]);
        Auth::login($users);
    }
}
