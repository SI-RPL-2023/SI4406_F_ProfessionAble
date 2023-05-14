<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $profile = Profile::get()->first();
        // return view ('profile')->with('profile', $profile);
        return view('profile');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Profile::where('id', $id)->first();
        return view('updateprofile')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'description' => 'required',
            'name' => 'required',
            'gender' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'education' => 'required'
        ]);

        $data = [
            'description' => $request->description,
            'name' => $request->name,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'education' => $request->education,
            'type_disability' => join(', ', $request->type_disability)
        ];

        Profile::where('id', $id)->update($data);
        return redirect()->to('profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
