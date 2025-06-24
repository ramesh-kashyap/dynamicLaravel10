<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laramin\Utility\Onumoti;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */


    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    public $redirectTo = 'admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->middleware('admin.guest')->except('logout');
    // }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        $pageTitle = "Admin Login";
        return view('admin.auth.login', compact('pageTitle'));
    }


     protected function guard()
    {
        return auth()->guard('admin');
    }

    public function login(Request $request)
    {
       try {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Find admin by username
        $admin = Admin::where('username', $request->username)->first();

        if (!$admin) {
            return back()->withErrors(['username' => 'Username not found']);
        }

        // Verify password using Hash check
        if (!Hash::check($request->password, $admin->password)) {
            return back()->withErrors(['password' => 'Incorrect password']);
        }

        // Login manually using Auth::guard
        Auth::guard('admin')->login($admin);

        return redirect()->route('admin.dashboard')->with('success', 'Login successful');

    } catch (\Exception $e) {
        return back()->withErrors(['error' => 'Something went wrong. Please try again.']);
    }
        
    }

  

 public function logout()
    {
        Auth::guard('admin')->logout();
         $notify[] = ['success', 'Admin Logout successfully'];
        return redirect()->route('admin.login')->withNotify($notify);

    }

}
