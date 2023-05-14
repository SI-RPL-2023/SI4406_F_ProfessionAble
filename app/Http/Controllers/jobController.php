<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Apply;
use Illuminate\Http\Request;

class jobController extends Controller
{

    //tampil
    public function job_detail($id)
    {
        $lowongan = Job::find($id);
        return view ('detaillowongan', compact (['lowongan']));
    }

    //edit
    public function edit($id)
    {
        $lowongan = Job::find($id);
        return view('company.editJob', compact('lowongan'));
    }

    //update
    public function update(Request $request, $id)
    {
        $lowongan = Job::find($id);
        $lowongan->name = $request->name;
        $lowongan->location = $request->location;
        $lowongan->detail = $request->detail;
        $lowongan->qualification = $request->qualification;
        $lowongan->posting_date = $request->posting_date;
        $lowongan->end_date = $request->end_date;
        $lowongan->save();

        return redirect('company')->with('success', "Data berhasil update");
    }

}
