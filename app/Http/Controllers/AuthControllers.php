<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthControllers extends Controller
{
    public function log(){
        return view('auth.login');



    }

    public function authenticate(Request $request){
        //dd($request-> toArray());

        $login_data = ["email" => $request -> email ,"password" => $request -> password ];

        if (Auth::attempt($login_data)){

           return redirect()-> route('Dashbord.prouduct.index.blade.php');
        }

            //return redirect()->back()->with('error','login failed');;


    }

    public function logout(){


    }
}
