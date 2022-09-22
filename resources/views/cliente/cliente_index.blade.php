<!-- resources/views/cliente.index.php -->
 
@extends('layout.app')
 
@section('title', 'Page Title')
 
@section('sidebar')
    @parent
 
      <p> Produto - Index </p>
@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
       {{ session('status') }}
    </div>
@endif

<a href="{{ url('cliente/create') }}">CRIAR</a>

      <p> Conteúdo </p>

    <table>
      <tr>
         <th>nome</th>
         <th>cpf</th>
         <th>telefone</th>
         <th>email</th>
      </tr>

      @foreach ($clientes as $value)
    
      <tr>
         <td>{{ $value->nome          }}</td>
         <td>{{ $value->cpf           }}</td>
         <td>{{ $value->telefone      }}</td>
         <td>{{ $value->email         }}</td>
         <td><a href="{{ url('cliente/' . $value->id) }}">Visualizar</a></td> 
         <td><a href="{{ url('cliente/' . $value->id . '/edit') }}">Editar</a></td>
         <td>
          {!! Form::open(['url' => 'cliente/' . $value->id, 'method' => 'delete']) !!}
          {{  Form::submit('Deletar') }}
    
          {!! Form::close() !!}

        </td>
      </tr>
      @endforeach

    </table>
@endsection