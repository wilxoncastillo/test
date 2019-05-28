<?php

use Illuminate\Database\Seeder;

use App\Compra;

class CompraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=1 ; $i < 2; $i++) { 
    		
    		Compra::create([
            	'cantidad' => $i,
            	'producto' => "producto-$i",
        	]);
    	
    	}
    }
}
