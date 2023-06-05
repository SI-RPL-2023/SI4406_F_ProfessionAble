<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function postlogin (Request $request){
        if (Auth::attempt($request->only('email','password'))){
            if (auth()->user()->level !== 'Admin'){
                return redirect()->to('home');
            }else{
                return redirect()->to('dashboard');
            }
        } else {
            return redirect('login');
        }   
    }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
