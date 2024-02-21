<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class newuserController extends Controller
{
     public function create()
    {
        return 'vue contact';
    }
    public function store(UserRequest $req)
    {
     
      $valo = $_GET["valo"] ;
      print($valo) ;
       $id = $req->input('id');
       if($id=="btn")
       {
           $bs = new User;
   
           $bs->username = $req->username;
           $bs->email = $req->email;
           $bs->password = Hash::make($req->password);
           
          
   
           $bs->save();
   
           return "Data Successfully Added";
       }
      

        return view('users');
    }
}
