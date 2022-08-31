<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizacionsocial extends Model
{
    use HasFactory;


    public function representantes(){
        return $this->hasMany(Representante::class,'id');
    }
}
