<!-- resources/views/usuario.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Usuario - Show </p>
@endsection

@section('content')
      <p>Conteúdo</p>

      <p><strong>id:</strong> {{ $usuario->id                  }}</p>
      <p><strong>nome:</strong> {{ $usuario->nome              }}</p>
      <p><strong>quantidade:</strong> {{ $usuario->quantidade  }}</p>
      <p><strong>valor:</strong> R$ {{ $usuario->valor         }}</p>
      <p><strong>criação:</strong> {{ $usuario->created_at     }}</p>

    
@endsection