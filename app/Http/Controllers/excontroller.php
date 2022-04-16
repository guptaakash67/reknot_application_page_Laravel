<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\registertable;
use validator;

class excontroller extends Controller
{
    //
    function addData(Request $req)
    {
       
        $req->validate([
            'username'=>'required',
            'Age'=>'required',
            'MoblieNo'=>'required|numeric|min:10',
            'email'=>'required|email',
            'college_name'=>'required',
            'gender'=>'required',
            'city'=>'required'
        ]);
            
        

        $registertable= new registertable;
        $registertable->name=$req->username;
        $registertable->age=$req->Age;
        $registertable->number=$req->MoblieNo;
        $registertable->email=$req->email;
        $registertable->college_name=$req->college_name;
        $registertable->gender=$req->gender;
        $registertable->city=$req->city;
        $registertable->save();
        if ($registertable->save()){
            return redirect('example')->with('message',"register successful");
        }
        else{
            return redirect('example')->with('message',"register unsuccessful");
        }
        
    }
}
