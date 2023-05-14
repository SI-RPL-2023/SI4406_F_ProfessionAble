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

    

}
