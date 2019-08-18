<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class expertos extends Model
{
    protected $table= "expertos";
    protected $fillable= ['nombre', 'apellidos', 'profesion', 'especialidad', 'trabajoact', 'imagen'];

    public function setImagenAttribute($imagen)
    {
        $this->attributes['imagen'] = Carbon::now()->second.$imagen->getClientOriginalName();
        $name =Carbon::now()->second.$imagen->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($imagen));

    }
}
