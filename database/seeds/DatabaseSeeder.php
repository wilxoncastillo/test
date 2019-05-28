<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable([
            'compras',
            'categorias',
            'detalle_compras',
        ]);

        $this->call([
            CompraSeeder::class,
            CategoriaSeeder::class,
            DetalleCompraSeeder::class,
        ]);
    }

    protected function truncateTable(array $tables)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table) {
        	DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
