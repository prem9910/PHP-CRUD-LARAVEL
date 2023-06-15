<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\detail;

class usercontroller extends Controller
{


    //adding users
    function insertdata(Request $req){
        $user = new detail;

        $user->name = $req->name;
        $user->email = $req->email;
        $user->city = $req->city;


        $user->save();

        return redirect('form');
    }

    function showdata(){
        $data=detail::all();
        return view('index',['mydata'=>$data]);
       
    }

    function deletedata($id){
        $data = detail::find($id);
        $data->delete();

        return redirect('/');
    }


    function editdata(Request $req){
        $data = detail::find($req->id);

        return view('editform',['mydata'=>$data]);
    }

    function updatedata(Request $req){
        $user = detail::find($req->id);

        $user->name = $req->name;
        $user->email = $req->email;
        $user->city = $req->city;


        $user->save();

        return redirect('/');
    }
}
