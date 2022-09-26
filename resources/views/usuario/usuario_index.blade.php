<!-- resources/views/usuario.index.php -->
 
@extends('adminlte::page')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p> Usuario - Index </p>
@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
       {{ session('status') }}
    </div>
@endif

<a href="{{ url('usuario/create') }}">CRIAR</a>

      <p> Conteúdo </p>

    <table>
      <tr>
         <th>id</th>
         <th>nome</th>
         <th>quantidade</th>
         <th>valor</th>
         <th></th>
      </tr>

      @foreach ($usuarios as $value)
    
      <tr>
        <td>{{ $value->id          }}</td>
        <td>{{ $value->nome          }}</td>
        <td>{{ $value->quantidade    }}</td>
        <td>{{ $value->valor         }}</td>
         <td><a href="{{ url('usuario/' . $value->id) }}">Visualizar</a></td> 
         <td><a href="{{ url('usuario/' . $value->id . '/edit') }}">Editar</a></td>
         <td>
          {!! Form::open(['url' => 'usuario/' . $value->id, 'method' => 'delete']) !!}
          {{  Form::submit('Deletar') }}
    
          {!! Form::close() !!}

        </td>
      </tr>
      @endforeach

    </table>
@endsection