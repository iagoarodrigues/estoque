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
            'quantidade'    => 10,
            'valor'         => 260
        ]);

        Usuario::create([
            'nome'          =>'Mouse',
            'quantidade'    => 5,
            'valor'         => 150
        ]);

        Usuario::create([
            'nome'          =>'Monitor 29',
            'quantidade'    => 20,
            'valor'         => 2200
        ]);

    }
}
