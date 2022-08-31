<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    use HasFactory;

    protected $fillable = ['Nombre', 'Carnet', 'Celular', 'id_cargo', 'id_organizacionsocial'];
  
    public function organizacionsocials(){
            return $this->belongsTo(Organizacionsocial::class,'id_organizacionsocial');
    }
         public function cargos(){
            return $this->belongsTo(Cargo::class,'id_cargo');
    }
}