<?php

namespace App\Http\Controllers;
use App\Models\Cluster ;
use Illuminate\Http\Request;
use DB;

class chartController extends Controller
{
    public function pieChart (val){
        
        $reponse = DB::select(DB::raw("SELECT SUM(transactions.amount) from transactions where transactions.type = '.$val.';"));
        
        return $reponse;
    }
}
