<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Apply;
use Illuminate\Http\Request;

class jobController extends Controller
{

    //tambah job
    public function createJob_view()
    {
        return view('nambahpekerjaan');
    }

    //simpan
    public function createJob_store(Request $request)
    {
        $lowongan = new Job;
        $lowongan->name = $request->name;
        $lowongan->location = $request->location;
        $lowongan->detail = $request->detail;
        $lowongan->qualification = $request->qualification;
        $lowongan->posting_date = $request->posting_date;
        $lowongan->end_date = $request->end_date;
        $lowongan->save();

        return redirect('/home')->with('success', "Data berhasil disimpan");
    }

}
