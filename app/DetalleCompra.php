<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    public function compras()
    {
        return $this->HasManyTo(Compra::class);
    }

    public function categorias()
    {
        return $this->HasManyTo(Categoria::class);
    }
}
