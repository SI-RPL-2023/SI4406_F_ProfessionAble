<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Job;
use App\Models\User;
use App\Models\Apply;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class applyController extends Controller
{
    //Tampil halaman apply
    public function showApplyPage($id, Request $request)
    {
        $apply_page = Job::findOrFail($id);
        return view('registrasilowongan', compact(['apply_page']));
    }

    //Simpan data apply
    public function apply_store(Request $request)
    {
        $request["apply_date"] = Carbon::now();
        $apply_lowongan = Apply::create($request->all());
        if ( $request -> hasFile("file") ) {
            $request -> file("file")->move("file/", $request->file("file")->getClientOriginalName());
            $apply_lowongan -> file = $request -> file("file")->getClientOriginalName();
            $apply_lowongan -> save();
        }

        return redirect('/home');
    }

    //list
    public function historyPage()
    {
        $job = new Job;
        $user = auth()->user();
        $list_history = Apply::where('user_id', $user->id)->latest()->get();
        $from_company = User::with('jobs')->get();
        return view ('riwayatlamaran', compact('list_history', 'from_company'));
    }

    //detailHistory
    public function detailHistory($id)
    {
        $detail_history = Apply::findOrFail($id);
        return view('detailriwayat', compact(['detail_history']));
    }

}
