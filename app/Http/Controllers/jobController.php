<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Job;
use App\Models\User;
use App\Models\Apply;
use App\Models\Artikel;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class jobController extends Controller
{
    //list
    public function index()
    {
        $list = Job::all();
        $list_artikel = Artikel::all();
        return view('/home', compact('list', 'list_artikel'));
    }

    //tambah job
    public function createJob_view()
    {
        return view('nambahpekerjaan');
    }

    //simpan
    public function createJob_store(Request $request)
    {
        $request["posting_date"] = Carbon::now();
        $lowongan = new Job;
        $lowongan->user_id = $request->user_id;
        $lowongan->name = $request->name;
        $lowongan->nama_perusahaan = $request->nama_perusahaan;
        $lowongan->foto = $request->foto;
        $lowongan->location = $request->location;
        $lowongan->detail = $request->detail;
        if ($request->has('qualification')) {
            $lowongan->qualification = $request->qualification;
        }

        $lowongan->qualification_khusus = $request->qualification_khusus;
        $lowongan->posting_date = $request->posting_date;
        $lowongan->end_date = $request->end_date;
        $lowongan->type_disability = implode(', ', $request->type_disability);
        $lowongan->save();

        return redirect('/home')->with('success', "Data berhasil disimpan");
    }

    //tampil
    public function job_detail($id)
    {
        $lowongan = Job::find($id);
        return view('detaillowongan', compact(['lowongan']));
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
        $lowongan = Job::find($id);
        $lowongan->delete();
        return redirect('/home')->with('success', "Data berhasil dihapus");
    }

    //tampil halaman detail job sisi pelamar
    public function viewPage_detailApply($id)
    {
        $apply_job = Job::findOrFail($id);
        $lowongan_lain = Job::latest()->take(2)->get();
        $total_lowongan = Job::latest()->count();
        $profile_company = User::all();
        return view('detaillowongan', compact(['apply_job', 'lowongan_lain', 'profile_company', 'total_lowongan']));
    }

    //list cari lowongan
    public function listSearch()
    {
        return view('carilowongan', [
            'total_lowongan'=> Job::latest()->filter(request(['search']))->count(),
            'lowongan_search' => Job::latest()->filter(request(['search']))->get(),
        ]);
    }

    public function listPelamar()
    {
        $total = Apply::where('nama_perusahaan', Auth::user()->name)->count();
        $user = auth()->user();
        // $job = Job::latest()->get();
        $job = Job::where('user_id', Auth::user()->id)->get();
        return view ('melihatListPelamar', compact(['job', 'total']));
    }

}
