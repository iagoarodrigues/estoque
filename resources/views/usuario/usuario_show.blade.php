<!-- resources/views/usuario.index.php -->
 
@extends('layout.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Usuario - Show </p>
@endsection

@section('content')
      <p>Conteúdo</p>

      <p><strong>id:</strong> {{ $usuario->id                  }}</p>
      <p><strong>nome:</strong> {{ $usuario->nome              }}</p>
      <p><strong>cpf:</strong> {{ $usuario->cpf  }}</p>
      <p><strong>telefone:</strong>  {{ $usuario->telefone         }}</p>
      <p><strong>email:</strong>  {{ $usuario->email         }}</p>
      <p><strong>criação:</strong> {{ $usuario->created_at     }}</p>

    
@endsection