<!-- resources/views/profissional.index.php -->
 
@extends('layout.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Profissional - Show </p>
@endsection

@section('content')
      <p>Conteúdo</p>

      <p><strong>id:</strong> {{ $profissional->id                  }}</p>
      <p><strong>nome:</strong> {{ $profissional->nome              }}</p>
      <p><strong>salao_id:</strong> {{ $profissional->salao_id      }}</p>
      <p><strong>criação:</strong> {{ $profissional->created_at     }}</p>

    
@endsection