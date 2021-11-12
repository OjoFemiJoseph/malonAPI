<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\{
    LoginFormRequest,
    RegistrationFormRequest,};
    
class AuthController extends Controller
{
    public function login(LoginFormRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {

            return response()->json([
                'status' => false,
                'message' => 'invalid credentials'
            ],401);
        }

        $token = $user->createToken('farmpay')->plainTextToken;

        return response()->json([
            'status' => true,
            'token' => $token,
        ],200);
    }

    public function register(RegistrationFormRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);

    
        return response()->json([
            'status'=>true,
            'message' => 'Registration Successful',
        ],200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'status' => 'true',
            'message' => 'User has been logged out',
        ],200);
    }
}
