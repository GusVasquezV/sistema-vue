<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //protected $table = 'categorias'; tabla que usara este modelo pero por efecto entiende que es el mismo nombre en plural
    //protected $primaryKey = 'id'; clave primaria por defecto entiende que es id
    protected $fillable = ['nombre', 'descripcion', 'condicion']; //elementos para cargar valores en masa

    public function articulos()
    {
        return $this->hasMany('App\Articulo');
    }
}
