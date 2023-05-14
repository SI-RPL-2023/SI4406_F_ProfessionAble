<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Job;
use App\Models\Apply;
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
        $apply_lowongan = Apply::create($request->all());
        if ( $request -> hasFile("file") ) {
            $request -> file("file")->move("file/", $request->file("file")->getClientOriginalName());
            $apply_lowongan -> file = $request -> file("file")->getClientOriginalName();
            $apply_lowongan -> save();
        }

        return redirect('/home');
    }

}
