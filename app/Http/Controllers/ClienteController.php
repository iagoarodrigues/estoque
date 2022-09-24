<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar todos os cliente
        //dd ('ENTROU NO INDEX');
        $clientes = Cliente::orderBy('nome', 'ASC')->get();

        //select * from cliente order by nome asc;
        //dd($cliente);

        return view('cliente.cliente_index', ['cliente' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.cliente_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $messages = [
         'nome.required'          => 'O campo :attribute é obrigatório!',
         'nome.min'               => 'O :attribute precisa ter no mínimo :min.',
         'quantidade.required'    => 'O :attribute é obrigatório!',
         'quantidade.integer'     => 'A :attribute é obrigatória!'
        ];

            $validated = $request->validate([
                'nome'         => 'required|min:3',
                'quantidade'   => 'required|integer',
                'valor'        => 'required',
        ], $messages);
        
        $clientes = new Cliente;
        $clientes->nome           = $request->nome;
        $clientes->quantidade     = $request->quantidade;
        $clientes->valor          = $request->valor;
        $clientes->save();

        return redirect('/cliente')->with('status', 'cliente criado com sucessso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd('ENTROU NO SHOW');
        $clientes = Cliente::find($id);
        //dd($cliente);
        return view('cliente.cliente_show', ['cliente' => $clientes]);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Cliente::find($id);
        //dd($cliente);
        return view('cliente.cliente_edit', ['cliente' => $clientes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd('UPDATE')
        $clientes = Cliente::find($id);
        $clientes->nome          = $request->nome;
        $clientes->quantidade    = $request->quantidade;
        $clientes->valor         = $request->valor;
        $clientes->save();

        return redirect('/cliente')->with('status', 'cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd('DESTROY');
        $clientes = Cliente::find($id);
        $clientes->delete();

        return redirect('/cliente')->with('status', 'cliente excluido com sucesso!');

    }
}
