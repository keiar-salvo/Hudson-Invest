<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Session;
use Auth;
use DB;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except(['logout', 'locked', 'unlock']);
    }

    /** Display the login page */
    public function login()
    {
        return view('auth.login');
    }

    /** Authenticate user and redirect */
    public function authenticate(Request $request)
    {
        $request->validate([
            'username'    => 'required|string',
            'password' => 'required|string',
        ]);
        try {
            $credentials = $request->only('username', 'password') + ['status' => 'Active'];
            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                Session::put($this->getUserSessionData($user));
             
                // Update last login
                // $user->update(['last_login' => Carbon::now()]);
                return redirect()->to('clientlist');
            }
            return redirect('login')->with('error', 'Wrong Username or Password');
                     return response()->json([
            'status' => 'error',
            'errors' => $validator->errors()
        ], 400); // Or redirect back with error
        } catch (\Exception $e) {
            \Log::info($e);
            return redirect()->back()->with('error', 'Login failed. Please try again.');
        }
    }

    /** Prepare User Session Data */
    private function getUserSessionData($user)
    {
        return [
            'name'                => $user->name,
            'email'               => $user->email,
            'user_id'             => $user->user_id,
            'status'              => $user->status,
            'role_name'           => $user->role_name,
            'username'             => $user->username,
        ];
    }

    /** Logout and clear session */
    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('login')->with('success', 'You have been logged out successfully!');
    }
}