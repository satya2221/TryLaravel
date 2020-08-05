<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function formnya(){
        return view('form');
    }
    public function welcome(Request $request){
//        dd($request->all());
        return view('bienvenu',$request);
    }
}
