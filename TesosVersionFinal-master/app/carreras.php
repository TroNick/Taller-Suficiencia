<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class carreras extends Model
{
    protected $table= "carreras";
    protected $fillable= ['facultad', 'grado', 'titulo', 'nombre', 'descripcion', 'imagen'];

    public function setImagenAttribute($imagen)
    {
        $this->attributes['imagen'] = Carbon::now()->second.$imagen->getClientOriginalName();
        $name =Carbon::now()->second.$imagen->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($imagen));

    }







    public function scopeBusqueda($query, $descripcion)
    {
        if($descripcion !="")
        {
            $query ->where('nombre','like',"%".$descripcion."%");
        }
    }
}
