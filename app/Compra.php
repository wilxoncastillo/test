<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    public function detalle() 
    {
        return $this->hasOne(DetalleCompra::class);
    }
}
