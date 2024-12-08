<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function signup(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Anda telah mendaftar');

    }
    public function signin(Request $request){
        $auth = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);
        if($auth){
            return redirect()->route('mahasiswa');
        }else{
            return redirect()->back();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
