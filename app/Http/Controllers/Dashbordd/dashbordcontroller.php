<?php

namespace App\Http\Controllers\Dashbordd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashbordcontroller extends Controller
{
    public function index(){

        return view('Dashbord.dashbord');
    }
}
