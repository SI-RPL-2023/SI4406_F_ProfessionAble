<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Apply;
use Illuminate\Http\Request;

class jobController extends Controller
{
    //list
    public function index()
    {
        $list = Job::all();
        return view ('/home', compact('list'));
    }

    //tambah job
    public function createJob_view()
    {
        return view('company.addJob');
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

    //tampil
    public function job_detail($id)
    {
        $lowongan = Job::find($id);
        return view ('company.detailJob', compact (['lowongan']));
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

    //delete
    public function destroy($id)
    {
        $lowongan= Job::find($id);
        $lowongan->delete();
        return redirect('company')->with('success', "Data berhasil dihapus");
    }

    //tampil halaman detail job sisi pelamar
    public function viewPage_detailApply($id)
    {
        $apply_job = Job::findOrFail($id);
        return view('apply.detailApplyJob', compact(['apply_job']));
    }

}
