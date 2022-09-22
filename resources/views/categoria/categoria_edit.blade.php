<!-- resources/views/categoria.create.php -->
 
@extends('layout.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Produto - Edit</p>
@endsection

@section('content')
      <p>Formulário</p>

      {!! Form::open(['url' => 'categoria/' . $categoria->id, 'method' => 'put']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('nome', $categoria->nome) }} <br><br>

      {{  Form::label('quantidade', 'Quantidade:') }} <br>
      {{  Form::text('quantidade',  $categoria->quantidade) }} <br><br>

      {{  Form::label('valor', 'Valor:') }} <br>
      {{  Form::text('valor',  $categoria->valor) }} <br><br>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection