<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class preguntas extends Model
{
    protected $table = "preguntas";
    protected $fillable = [
        'descripcion',
    ];
    public function scopeBusqueda($query, $descripcion)
    {
        if($descripcion !="")
        {
            $query ->where('nombre','like',"%".$descripcion."%");
        }
    }
}
