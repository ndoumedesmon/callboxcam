<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class transDashController extends Controller
{
    public function index(): View
    {
        $trans = DB::select('select transactions.type, transactions.amount,clusters.id as clusterID from transactions join sales join clusters');

        $dataPoints = [];

        foreach ($trans as $browser) {

            $dataPoints[] = [
                "clusterID" => $browser['clusterID'],
                "type" => $browser['type'],
                "amount" => floatval($browser['amount'])
            ];
        }

        return view("pie-chart", [
            "data" => json_encode($dataPoints)
        ]);
    }
}
