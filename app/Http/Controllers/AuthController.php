<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        $field = $request -> validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users , email',
            'password' => 'required|string|string'
        ]);
        $user = User::create([
            'name' => $field['name'],
            'email' => $field['email'],
            'password' => bcrypt($field['password']),
        ]);

        $token = $user-> createToken('myshopee')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response, 201);

    }

    public function logout(Request $request){
        
        $field = $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $user =User::

        return "auth login";

    } 
}
