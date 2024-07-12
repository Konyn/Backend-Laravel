<?php

namespace App\Http\Controllers;


use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use HttpResponses;
    public function login(Request $request)
    {
        if (Auth::attempt($request->only("email", "password"))) {
            $token = $request->user()->createToken("authenticate")->plainTextToken;
            $user = $request->user();
            $user['token'] = $token;
            return $this->response(200, "Authentication successful", $user);
        }
        return $this->error(401, "Authentication failed");
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return $this->response(200, "Logged out successfully");
    }
}