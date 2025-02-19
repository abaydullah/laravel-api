<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'email', 'unique:users', ''],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $user = User::create($request->only('name', 'email')+['password'=> Hash::make($request->input('password'))]);

        return response()->json(new UserResource($user));
    }
}
