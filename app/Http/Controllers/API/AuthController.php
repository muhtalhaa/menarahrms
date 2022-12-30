<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email:dns|string',
            'password' => 'required|string',
        ]);
        
        $user = User::with('roles', 'permissions')->where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'The provided credentials do not match our records.'
            ], 200);
        }

        $token = $user->createToken('token-name')->plainTextToken;

        return response()->json([
                'message' => 'Success',
                'user' => $user,
                'token' => $token,
            ], 200);
    }
}