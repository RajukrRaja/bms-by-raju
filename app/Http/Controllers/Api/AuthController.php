<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
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
        if (User::where('email', $request->email)->exists()) {

            return $request->header('accept') == 'application/json'

                ? response()->json([
                    'success' => false,
                    'message' => 'Email already exists'
                ], 409)

                : back()->with('error', 'Email already exists');
        }

        $user = User::create([

            'name' => $request->name,

            'email' => $request->email,

            'password' => Hash::make($request->password),

        ]);

        return $request->header('accept') == 'application/json'

            ? response()->json([
                'success' => true,
                'message' => 'User registered successfully',
                'user' => $user
            ])

            : redirect('/auth/login-page');
    }

    public function login(Request $request)
    {
        if (!$token = JWTAuth::attempt($request->only('email', 'password'))) {

            return $request->header('accept') == 'application/json'

                ? response()->json([
                    'success' => false,
                    'message' => 'Invalid credentials'
                ], 401)

                : back()->with('error', 'Invalid credentials');
        }

        return $request->header('accept') == 'application/json'

            ? response()->json([
                'success' => true,
                'message' => 'Login successful',
                'token' => $token
            ])

            : response()
                ->redirectTo('/auth/profile')
                ->withCookie(cookie('jwt_token', $token, 60));
    }

    public function profile(Request $request)
    {
        $token = $request->cookie('jwt_token') ?: $request->bearerToken();

        if (!$token) {

            return $request->header('accept') == 'application/json'

                ? response()->json([
                    'success' => false,
                    'message' => 'Token not found'
                ], 401)

                : redirect('/auth/login-page');
        }

        try {

            $user = JWTAuth::setToken($token)->authenticate();

            return $request->header('accept') == 'application/json'

                ? response()->json([
                    'success' => true,
                    'user' => $user
                ])

                : view('auth.profile', compact('user'));

        } catch (\Exception $e) {

            return $request->header('accept') == 'application/json'

                ? response()->json([
                    'success' => false,
                    'message' => 'Invalid token'
                ], 401)

                : redirect('/auth/login-page');
        }
    }

    public function logout(Request $request)
    {
        $token = $request->cookie('jwt_token') ?: $request->bearerToken();

        if ($token) {

            JWTAuth::setToken($token)->invalidate();
        }

        return $request->header('accept') == 'application/json'

            ? response()->json([
                'success' => true,
                'message' => 'Logout successful'
            ])

            : response()
                ->redirectTo('/auth/login-page')
                ->withCookie(cookie('jwt_token', '', -1));
    }
}