<!-- resources/views/profissional.create.php -->
 
@extends('layout.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p>Produto - Create</p>
@endsection

@section('content')
      <p>Formulário</p>

      @if ($errors->any())
      <div class="alert alert-danger">
         <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error }}</li>
            @endforeach
         </ul>
      </div>
      @endif

      {!! Form::open(['url' => 'profissional/create']) !!}

      {{  Form::label('nome', 'Nome:') }} <br>
      {{  Form::text('nome') }} <br><br>

      {{  Form::label('salao_id', 'Salao:') }} <br>
      {{  Form::text('salao_id') }} <br><br>

      {{  Form::submit('Enviar') }}

      {!! Form::close() !!}
    
@endsection