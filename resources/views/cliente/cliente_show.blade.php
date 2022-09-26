<!-- resources/views/clientes.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Cliente - Show </p>
@endsection

@section('content')
      <p>Conteúdo</p>

      <p><strong>id:</strong> {{ $cliente->id                  }}</p>
      <p><strong>nome:</strong> {{ $cliente->nome              }}</p>
      <p><strong>quantidade:</strong> {{ $cliente->quantidade  }}</p>
      <p><strong>valor:</strong> R$ {{ $cliente->valor         }}</p>
      <p><strong>criação:</strong> {{ $cliente->created_at     }}</p>

    
@endsection