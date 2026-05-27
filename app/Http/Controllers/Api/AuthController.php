<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

return response()->json([

'success' => false,

'errors' => $validator->errors(),

], 422);

}

$credentials = $request->only('email', 'password');

if (!$token = Auth::guard('api')->attempt($credentials)) {

return response()->json([

'success' => false,

'message' => 'Invalid credentials',

], 401);

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

$user = Auth::guard('api')->user();

return view('auth.profile', compact('user'));

}



public function logout()
{

Auth::guard('api')->logout();

return response()->json([

'success' => true,

'message' => 'User logged out successfully',

]);

}

}