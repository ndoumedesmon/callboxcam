<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class LoginController extends Controller
{
    public function create(){
        return view('showroom.login');
    }

    public function store(RequestController $request){
        
        return view('adminviews.adminpage');
    }
}
