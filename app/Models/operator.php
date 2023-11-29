<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $fillable = [
        'operatorName',
        'op_API',
        'created_at',
        'updated_at'
        
    ];
    public function sales(){

        return $this->belongsToMany(Sale::class); 
    }
    
}
