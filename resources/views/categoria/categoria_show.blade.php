<!-- resources/views/categoria.index.php -->
 
@extends('layout.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Produto - Show </p>
@endsection

@section('content')
      <p>Conteúdo</p>

      <p><strong>id:</strong> {{ $categoria->id                  }}</p>
      <p><strong>nome:</strong> {{ $categoria->nome              }}</p>
      <p><strong>criação:</strong> {{ $categoria->created_at     }}</p>

    
@endsection