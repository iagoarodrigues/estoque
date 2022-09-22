<!-- resources/views/usuario.index.php -->
 
@extends('layout.app')
 
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
         <th>nome</th>
         <th>CPF</th>
         <th>telefone</th>
         <th>email</th>
         <th></th>
         <th></th>
      </tr>

      @foreach ($usuarios as $value)
    
      <tr>
         <td>{{ $value->nome          }}</td>
         <td>{{ $value->cpf           }}</td>
         <td>{{ $value->telefone      }}</td>
         <td>{{ $value->email         }}</td>
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