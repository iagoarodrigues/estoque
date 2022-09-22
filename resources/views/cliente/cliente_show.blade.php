<!-- resources/views/clientes.index.php -->
 
@extends('layout.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Cliente - Show </p>
@endsection

@section('content')
      <p>Conteúdo</p>

      <p><strong>id:</strong> {{ $clientes->id                  }}</p>
      <p><strong>nome:</strong> {{ $clientes->nome              }}</p>
      <p><strong>quantidade:</strong> {{ $clientes->quantidade  }}</p>
      <p><strong>valor:</strong> R$ {{ $clientes->valor         }}</p>
      <p><strong>criação:</strong> {{ $clientes->created_at     }}</p>

    
@endsection