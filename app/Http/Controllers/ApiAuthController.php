<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{
    public function register(Request $req)
    {
        $form = $req->validate([
            "name" => "required|string",
            "email" => "required|email|unique:users",
            "password" => "required|min:3|confirmed",
        ]);

        $user = User::create([
            "name" => $form["name"],
            "email" => $form["email"],
            "password" => Hash::make($form["password"]),
        ]);
        $token = $user->createToken("autoken")->plainTextToken;

        return response()->json(["token" => $token]);
    }

    public function login(Request $request)
    {

        $form = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($form)) {
            // Issue token
            $token = auth()->user()->createToken('authToken')->plainTextToken;
            return response()->json(['token' => $token]);
        } else {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out successfully']);
    }
}
