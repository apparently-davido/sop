<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SopController extends Controller
{
    //
    public function getIndex(){
        return view('sop.index');
    }
}
