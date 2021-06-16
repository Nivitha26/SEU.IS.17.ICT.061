<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class insert extends Controller
{
    //
    public function add(Request $req){
        $data = new forms;
        $data->name = $req->name;
        $data->username = $req->username;
        $data->dob = $req->dob;
        $data->email = $req->email;
        $data->name = $req->name;
        $data->phone = $req->phone;
        $data->NIC = $req->NIC;
        $data->male = $req->male;
        $data->female = $req->female;
        $data->other = $req->other;
        $data->password = $req->password;
        $data->confpassword = $req->confpassword;
        $data->save();
        return redirect ('form');
}

public function detail(){
    $data = form::all();
    return view ('detail' ['data'-> $data]);
}
