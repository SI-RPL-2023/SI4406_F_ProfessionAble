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
    //list
    public function historyPage()
    {
        $list_history = Apply::all();
        return view ('history.historyPage', compact('list_history'));
    }

    //detailHistory
    public function detailHistory($id)
    {
        $detail_history = Apply::findOrFail($id);
        return view('history.detailHistory', compact(['detail_history']));
    }

}
