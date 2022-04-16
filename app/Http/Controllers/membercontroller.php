<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registertable;

class membercontroller extends Controller
{
    //
    function show()
    {
        // return registertable::all();
        $data= registertable::all();
        return view('list',['registers'=>$data]);
    }
}
