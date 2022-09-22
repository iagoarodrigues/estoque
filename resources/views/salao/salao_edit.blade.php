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

      {{  Form::label('gerente_id', 'Gerente:') }} <br>
      {{  Form::text('gerente_id',  $salao->gerente_id) }} <br><br>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection