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

    $Ret = (clone $rek) -> where('type','=','retrait')->get();

   $Nbret = $Ret -> groupBy(function($val) {
    return Carbon::parse($val->created_at)->format('d-m-y');
        })
    ->map(function ($group) {

        return $group->count();
    
       });
    $Nbdep = $Dep-> groupBy(
        function($val) {
        return Carbon::parse($val->created_at)->format('d-m-y');
    })->map(function ($group) { return $group->count(); });

    dd($Nbret);
   

    $trans = DB::select('select transactions.created_at,transactions.type, transactions.amount,clusters.id as clusterID from transactions join sales on transactions.sale_id = sales.id join clusters
    on sales.cluster_id = clusters.id');
    $json= json_encode($trans) ; // je transforme l'objet stdString en objet jason
    $arrayFinal = json_decode($json,true); // je transforme l'objet json en array
    //var_dump($arrayFinal );
    //die ;
   
   
        $dataPoints = [];

        foreach ($arrayFinal as $browser) {
            if($browser['clusterID'] == 1 || $browser['clusterID'] == 2 || $browser['clusterID'] == 3 || $browser['clusterID'] == 4 )
            {
                $dataPoints []= [
                    "cluster" => $browser['clusterID'],
                    "type" => $browser['type'],
                    "amount" => $browser['amount'],
                    'date' => $browser["created_at"]
                ];
            }
            
        }
       
      
    return view('adminviews/adminpage', compact('REQUEST','nbTrans','nbDep','dataPoints'));
})->middleware(['auth'])->name('adminpage');






require __DIR__.'/auth.php';
