<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'nome'          =>'Teclado',
           
        ]);

        Categoria::create([
            'nome'          =>'Mouse',
            
        ]);

        Categoria::create([
            'nome'          =>'Monitor 29',
           
        ]);

    }
}
