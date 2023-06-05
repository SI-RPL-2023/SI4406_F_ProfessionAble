<?php

namespace App\Http\Controllers;

use App\Models\Job;
// use App\Models\Profile;
use App\Models\Pelamar;
use Illuminate\Http\Request;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function viewProfile()
    {
        $profile = Pelamar::get();
        return view ('profile')->with('profile', $profile);
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
    public function editProfile(string $id)
    {
        $data = Pelamar::where('id', $id)->first();
        return view('updateprofile')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateProfile(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required', 
        ]);
        
        if (isset($request->type_disability)) {
            $data = [
                'description' => $request->description,
                'name' => $request->name,
                'gender' => $request->gender,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'education' => $request->education,
                'website' => $request->website,
                'url' => $request->url,
                'industri' => $request->industri,
                'ukuran_perusahaan' => $request->ukuran_perusahaan,
                'jenis_perusahaan' => $request->jenis_perusahaan,
                'type_disability' => implode(', ', $request->type_disability)
            ];
        } else {
            $data = [
                'description' => $request->description,
                'name' => $request->name,
                'gender' => $request->gender,
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'education' => $request->education,
                'website' => $request->website,
                'url' => $request->url,
                'industri' => $request->industri,
                'ukuran_perusahaan' => $request->ukuran_perusahaan,
                'jenis_perusahaan' => $request->jenis_perusahaan,
                'type_disability' => ''
            ];
        }

        $upload_foto = Pelamar::find($id);
        if ( $request -> hasFile("foto") ) {
            $request -> file("foto")->move("foto/", $request->file("foto")->getClientOriginalName());
            $upload_foto -> foto = $request -> file("foto")->getClientOriginalName();
            $upload_foto -> save();
        }

        $detail = Pelamar::where('id', $id)->update($data);

        return redirect('/profile');

    }

    public function detail_perusahaan($id)
    {
        $get_perusahaan = Job::find($id);
        $profile_perusahaan = $get_perusahaan->user;
        return view('profileperusahaan', compact('profile_perusahaan'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}