<!-- resources/views/salao.create.php -->
 
@extends('layout.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Salao - Edit</p>
@endsection

@section('content')
      <p>Formulário</p>

      {!! Form::open(['url' => 'salao/' . $salao->id, 'method' => 'put']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('nome', $salao->nome) }} <br><br>

      {{  Form::label('quantidade', 'Quantidade:') }} <br>
      {{  Form::text('quantidade',  $salao->quantidade) }} <br><br>

      {{  Form::label('valor', 'Valor:') }} <br>
      {{  Form::text('valor',  $salao->valor) }} <br><br>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection