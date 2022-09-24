<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Cliente;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nome'          =>'Teclado',
          
        ]);

        Cliente::create([
            'nome'          =>'Mouse',
          
        ]);

        Cliente::create([
            'nome'          =>'Monitor 29',
           
        ]);

    }
}
