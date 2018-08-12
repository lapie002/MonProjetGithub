<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UsersController extends Controller
{
    //methode get
    public function getInfos(){
      return view("infos");
    }

    //methode post
    public function postInfos(Request $request){
      return 'Le nom est ' . $request->input('nom');
    }
}
