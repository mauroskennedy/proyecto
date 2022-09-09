<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
protected $fillable = ['Nombre', 'Sigla', 'Piso', 'Ubicacion', 'id_cargo', 'id_representante'];

public function representantes(){
            return $this->belongsTo(Representante::class,'id_representante');
    }
         public function cargos(){
            return $this->belongsTo(Cargo::class,'id_cargo');
    }
}
