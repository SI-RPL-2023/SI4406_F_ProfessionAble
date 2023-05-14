<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    public function view()
    {
        return view('register');
    }

    public function register_store(Request $request)
    {
        Pelamar::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        // $data = $request->validate([
        //     'name' => $request->name,
        //     'no_hp' => $request->no_hp,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password)
        // ]);

        // $data['password'] = bcrypt($data['password']);

        // dd($user);
        return redirect('/login');
    }
}
