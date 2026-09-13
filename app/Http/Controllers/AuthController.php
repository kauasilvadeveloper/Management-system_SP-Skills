<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function signup(Request $request)
    {
        $credentials = $request->validate([
            "name" => "string|required",
            "username" => "string|unique:users,username|required",
            "email" => "email|unique:users,email|required",
            "team_id" => "integer|required",
            "password" => "string|required",
        ]);

        $user = User::create($credentials);

        return response()->json($user, 201);
    }
}
