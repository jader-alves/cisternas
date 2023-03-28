@extends('components.layout')
@section('title', 'Cadastro')
@section('content')
    <form  class="form-control" method="POST" action="{{route('entidades.update', [$entidade->id] )}}">
        @method('PUT')
        @include('entidades._form')
    </form>
    <br>
    <br>
    <h3>Cisternas Atendidas</h3>
    <br>
    <table class="table">
        <tr> <th>Id</th> <th>Nome</th><th>Localização</th><th>Cidade</th><th>Estado</th><th>Editar</th></tr>
        @foreach($cisternas_atendidas as $c)
          <tr>
            <td>{{$c->id}} </td>
            <td>{{$c->nome}} </td>
            <td>{{$c->localizacao}} </td>
            <td>{{$c->cidade}} </td>
            <td>{{$c->estado}} </td>
            <td><a href="{{route('cisternas.edit', [$c->id]) }}"><button type="button" class="btn btn-primary">Editar</button></a></td>
          </tr>
        @endforeach
    </table>
 @endsection
