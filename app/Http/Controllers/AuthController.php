<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function signup(StoreUserRequest $request)
    {
        $credentials = $request->validated();

        $user = User::create($credentials);

        return response()->json($user, 201);
    }
}
