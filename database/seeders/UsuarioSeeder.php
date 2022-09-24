<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nome'          =>'Teclado',
           
        ]);

        Usuario::create([
            'nome'          =>'Mouse',
            
        ]);

        Usuario::create([
            'nome'          =>'Monitor 29',
           
        ]);

    }
}
