<?php

use Illuminate\Database\Seeder;

use App\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1 ; $i < 2; $i++) { 
    		Categoria::create([
            	'nombre' => "categoria-$i",
        	]);
    	}
    }
}
