<!-- resources/views/usuario.create.php -->
 
@extends('adminlte::page')
 
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

      {{  Form::label('cpf', 'CPF:') }} <br>
      {{  Form::text('cpf',  $usuario->cpf) }} <br><br>

      {{  Form::label('telefoner', 'Telefone:') }} <br>
      {{  Form::text('telefone',  $usuario->telefone) }} <br><br>

      {{  Form::label('email', 'Email:') }} <br>
      {{  Form::text('email',  $usuario->email) }} <br><br>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection