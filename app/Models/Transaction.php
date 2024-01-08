<?php

namespace App\Models;
use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'type',
        'destinator'
    ];

    public function sale () {
        
        return $this->belongsTo(Sale::class,'sale_id','id') ;
    }

    


}
