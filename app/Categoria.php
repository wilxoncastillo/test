<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function detalle() 
    {
        return $this->hasOne(DetalleCompra::class);
    }

    
}
