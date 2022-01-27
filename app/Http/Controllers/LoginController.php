<?php

namespace App\Http\Controllers;
use Hash;
use DB;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
      

        public function authenticate(Request $request)
        {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);
    
            $credentials = $request->only('email', 'password');
    
            if (Auth::attempt($credentials)) {
                return redirect ('index');
            }
    
            return redirect('superadmin')->with('error', 'Oppes! You have entered invalid credentials');
        }
    
        public function logout(Request $request ) {
            $request->session()->flush();
            Auth::logout();
            return Redirect('superadmin');
            }
    
    
}
