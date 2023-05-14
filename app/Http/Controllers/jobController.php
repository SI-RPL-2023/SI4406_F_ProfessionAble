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
        return view('detaillowongan', compact(['apply_job']));
        // return redirect('/detaillowongan')->with('apply_job',$apply_job);
    }

}
