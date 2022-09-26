<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Salao;

class SalaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Salao::create([
            'nome'          =>'Teclado',
            'quantidade'    => 10,
            'valor'         => 260
        ]);

        Salao::create([
            'nome'          =>'Mouse',
            'quantidade'    => 5,
            'valor'         => 150
        ]);

        Salao::create([
            'nome'          =>'Monitor 29',
            'quantidade'    => 20,
            'valor'         => 2200
            
        ]);

    }
}
