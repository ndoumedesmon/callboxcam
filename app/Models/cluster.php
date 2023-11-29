<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    use HasFactory;
    public function sales(){

        return $this->hasMany(Sale::class); 
    }
    public function user(){

        return $this->hasOne(User::class); 
    }

}
