<!-- resources/views/salao.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Salao - Show </p>
@endsection

@section('content')
      <p>Conteúdo</p>

      <p><strong>id:</strong> {{ $salao->id                  }}</p>
      <p><strong>nome:</strong> {{ $salao->nome              }}</p>
      <p><strong>quantidade:</strong> {{ $salao->quantidade  }}</p>
      <p><strong>valor:</strong> R$ {{ $salao->valor         }}</p>
      <p><strong>criação:</strong> {{ $salao->created_at     }}</p>

    
@endsection