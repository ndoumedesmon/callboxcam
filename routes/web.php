<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Sale;
use App\Models\Cluster;
use App\Http\Controllers\chartController;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon ;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('showroom/login');
    //return view('welcome');
})->name('login');

Route::get('/adminviews/users', function () {

    $REQUEST = User::all();

    $dataPoints = [];
    $amtTotret ='' ; 
    $amtTotdep = '';
    $months = '';
    $nbTrans ='';
    $nbDep ='';
    $dataPoints ='';
    $dates='';
    $years ='';
    $Nbret ='';
    $Nbdep ='';
    $NbdepY='';
    $NbretY = '';

    //dd($REQUEST);

                return view('adminviews.users',compact('REQUEST','amtTotret','amtTotdep','months','nbTrans','nbDep','dataPoints','dates','years','Nbret','Nbdep','NbdepY','NbretY'));
            })->name('usersPage');


Route::get('/adminviews/adminpage',[chartController::class,'pieChart'])->name('adminpage');


Route::get('/adminviews/adminpage', function () {
    $REQUEST = App\Models\User::join('clusters', 'users.id', '=', 'clusters.user_id')
    ->join('sales', 'sales.cluster_id', '=', 'clusters.id')
    ->join('transactions', 'transactions.sale_id', '=', 'sales.id')
    ->get();
    $nbTrans = $REQUEST -> where('type','=','retrait') -> count() ;
    $nbDep = $REQUEST -> where('type','=','depot') -> count() ;


    $rek = App\Models\Transaction::with(['sale'=> function ($querry) {
         $querry->whereIn('cluster_id',[1,2,3,4]) ;
    } 
    ]); // pour recuperer tt les champs
   // ])->get(['id','created_at','type','sale_id']); // pour choisir les champs a recupérer

   

   // ne peut pas retourner created_at car ici eloquent retour du carbon,
    $Dep = (clone $rek) -> where('type','=','depot')->get();
    $amtDep = (clone $rek) -> where('type','=','depot')->get();

    $Ret = (clone $rek) -> where('type','=','retrait')->get();
    $amtRet = (clone $rek) -> where('type','=','retrait')->get();

 
   
  

//////////////////////////////////////////// nombre de depot et retrait par jours ////////////////////
   $Nbret = $Ret -> groupBy(function($val) {

    return Carbon::parse($val->created_at)->format('d-M');
        })
    ->map(function ($group) {

        return $group->count();

       });
    
    $amtTotret = $amtRet -> groupBy(function($val) {

        //return Carbon::parse($val->created_at)->format('l d m, Y');
        return Carbon::parse($val->created_at)->format('M-Y');
            })
        ->map(function ($group) {
    
            return $group-> sum(['amount']);
        
           });

    $amtTotdep = $amtDep -> groupBy(function($val) {

           
            return Carbon::parse($val->created_at)->format('M-Y');
                })
            ->map(function ($group) {
        
                return $group-> sum(['amount']);
            
               });
    


    $Nbdep = $Dep-> groupBy(
        function($val) {
        return Carbon::parse($val->created_at)->format('d-M');
    })->map(function ($group) { return $group->count(); });

   /////////////////////////////////// nombre de depots et retraits par Ans ////////////////////////

   $NbretY = $Ret -> groupBy(function($val) {

    return Carbon::parse($val->created_at)->format('Y');
        })
    ->map(function ($group) {

        return $group->count();
    
       });

    
    $NbdepY = $Dep-> groupBy(
        function($val) {
        return Carbon::parse($val->created_at)->format('Y');
    })->map(function ($group) { return $group->count(); });   

   /////////////////////////////////////////////////////////////////////////////////////////////////////

    //dd($Nbdep);
   

    $trans = DB::select('select transactions.created_at,transactions.type, transactions.amount,clusters.id as clusterID from transactions join sales on transactions.sale_id = sales.id join clusters
    on sales.cluster_id = clusters.id');
    $json= json_encode($trans) ; // je transforme l'objet stdString en objet jason
    $arrayFinal = json_decode($json,true); // je transforme l'objet json en array
    //var_dump($arrayFinal );
    //die ;
   
   
    $dataPoints = [];

    // les 7 derniers jours de la semaine
    $dates = array();
    for ($i = 0; $i < 6; $i++) {
        $dates[] = date('d-M', strtotime("-$i days"));
    }

    $years = array();
    for ($i = 0; $i < 5; $i++) {
        $years[] = date('Y', strtotime("-$i years"));
    }

    $months = array();
    for ($i = 0; $i < 6; $i++) {
        $months[] = date('M-Y', strtotime("-$i months"));
    }

     $clusters = [1,2,3,6] ;

        foreach ($arrayFinal as $browser) {

            if( in_array($browser['clusterID'],$clusters )) // la fonction in_arrray() pour verifier si le cluster filtré est dans la liste admissible
            {
                $dataPoints []= [
                    "cluster" => $browser['clusterID'],
                    "type" => $browser['type'],
                    "amount" => $browser['amount'],
                    'date' => $browser["created_at"]
                ];
            }
            
        }
       
      
    return view('adminviews/adminpage', compact('REQUEST','amtTotret','amtTotdep','months','nbTrans','nbDep','dataPoints','dates','years','Nbret','Nbdep','NbdepY','NbretY'));
})->middleware(['auth'])->name('adminpage');






require __DIR__.'/auth.php';
