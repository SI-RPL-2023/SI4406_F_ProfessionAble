<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // public function postlogin (Request $request){
    //     //dd($request->all());
    //     if (Auth::attempt($request->only('email','password'))){
    //         return redirect('/home');
    //     }
    //     return redirect('login');
    // }

    public function login(){
        return view('login');
    }

    public function postlogin(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = User::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);
                return view('home');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout (Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
