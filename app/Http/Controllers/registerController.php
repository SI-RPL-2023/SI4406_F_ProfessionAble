<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function view()
    {
        return view('register');
    }

    public function registerStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'phone_number' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ]);

        // $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->route('register');
    }
}
