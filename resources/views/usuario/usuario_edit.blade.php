<!-- resources/views/usuario.create.php -->
 
@extends('layout.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Usuario - Edit</p>
@endsection

@section('content')
      <p>Formulário</p>

      {!! Form::open(['url' => 'usuario/' . $usuario->id, 'method' => 'put']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('nome', $usuario->nome) }} <br><br>

      {{  Form::label('quantidade', 'Quantidade:') }} <br>
      {{  Form::text('quantidade',  $usuario->quantidade) }} <br><br>

      {{  Form::label('valor', 'Valor:') }} <br>
      {{  Form::text('valor',  $usuario->valor) }} <br><br>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection