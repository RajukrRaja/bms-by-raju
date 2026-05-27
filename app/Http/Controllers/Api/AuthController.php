<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;


use App\Models\User;

class AuthController extends Controller
{



public function register_page()
{

return view('auth.register');

}


public function login_page()
{

return view('auth.login');

}



public function register(Request $request)
{

$validator = Validator::make($request->all(), [

'name' => 'required|string|max:255',

'email' => 'required|email|unique:users,email',

'password' => 'required|min:6',

]);

if ($validator->fails()) {

return response()->json([

'success' => false,

'errors' => $validator->errors(),

], 422);

}

$user = User::create([

'name' => $request->name,

'email' => $request->email,

'password' => Hash::make($request->password),

]);

return response()->json([

'success' => true,

'message' => 'User registered successfully',

'data' => $user,

], 201);

}


public function login(Request $request)
{

$validator = Validator::make($request->all(), [

'email' => 'required|email',

'password' => 'required',

]);

if ($validator->fails()) {

if ($request->expectsJson()) {

return response()->json([

'success' => false,

'errors' => $validator->errors(),

], 422);

}

return back()->withErrors($validator)->withInput();

}

$credentials = $request->only('email', 'password');

if (!$token = Auth::guard('api')->attempt($credentials)) {

if ($request->expectsJson()) {

return response()->json([

'success' => false,

'message' => 'Invalid credentials',

], 401);

}

return back()->with('error', 'Invalid credentials');

}

Auth::login(Auth::guard('api')->user());

if ($request->isMethod('post') && !$request->ajax()) {

return redirect('/auth/profile');

}

return response()->json([

'success' => true,

'message' => 'Login successful',

'token' => $token,

'token_type' => 'bearer',

'user' => Auth::guard('api')->user(),

]);

}


public function profile()
{
    $user = auth()->user();

    // Check user logged in or not
    if (!$user) {

        return redirect('/auth/login-page');

    }

    return view('auth.profile', compact('user'));
}



public function logout()
{
    try {

        if (JWTAuth::getToken()) {

            Auth::guard('api')->logout();
        }

    } catch (JWTException $e) {

        // token na mile tab bhi redirect kar do
    }

    // session logout
    Auth::logout();

    // session invalidate
    request()->session()->invalidate();

    // regenerate token
    request()->session()->regenerateToken();

    // redirect to login page
    return redirect('/auth/login-page');
}

}