<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $users = [
        ['username' => 'admin', 'password' => '12345678'],
        ['username' => 'laut', 'password' => '12345678'],
        ['username' => 'farhan', 'password' => '12345678'] 
    ];

    public function showLogin(){
        return view('pages.login');
    }

    public function profile(request $request)
    {
        
         $username = $request->query('username');


        return view('pages.profile', [
            'username' => $username
        ]);
    }

    

    public function Login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        foreach ($this->users as $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                session(['user' => $username]);
                return redirect('/dashboard?username=' . $username);
            }
        }

        return back()->withErrors(['login' => 'Username atau password salah']);
    }

    public function logout()
    {
        
        session()->forget('user');
        return redirect()->route('login');
    }

}
