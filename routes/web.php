<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Sale;



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




Route::get('/adminviews/adminpage', function () {
    $REQUEST = App\Models\User::join('clusters', 'users.id', '=', 'clusters.user_id')
    ->join('sales', 'sales.cluster_id', '=', 'clusters.id')
    ->join('transactions', 'transactions.sale_id', '=', 'transactions.id')
    ->get();
    $nbTrans = $REQUEST -> where('type','=','transfert') -> count() ;

    return view('adminviews/adminpage', compact('REQUEST','nbTrans'));
})->middleware(['auth'])->name('adminpage');

require __DIR__.'/auth.php';
