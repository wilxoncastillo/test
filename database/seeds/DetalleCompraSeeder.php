<?php

use Illuminate\Database\Seeder;

use App\{Compra, Categoria, DetalleCompra};

class DetalleCompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $compras = Compra::all();
        $categorias = Categoria::all();

        foreach ($compras as $compra) {
        	foreach ($categorias as $categoria) {
        		for ($i=0; $i < 2; $i++) { 
	        		DetalleCompra::create([
			            'compra_id' => $compra->id,
			            'nombre' => "nombre de la compra $i",
			            'precio' => 10,
			            'categoria_id' => $categoria->id,
	        		]);
        		}
        	}
        }
    }
}
