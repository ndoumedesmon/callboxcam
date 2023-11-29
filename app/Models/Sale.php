<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    public function cluster(){

        return $this->belongsTo(Cluster::class); 
    }

    public function user(){

        return $this->hasOne(User::class); 
    }
    public function operators(){

        return $this->belongsToMany(Operator::class); 
    }

}
