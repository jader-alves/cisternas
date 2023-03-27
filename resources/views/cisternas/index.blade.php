
@extends('components.layout')
@section('title', 'Cadastro')
@section('content')
    @if (count($cisternas)==0)
        <div class="alert alert-primary" role="alert">
                É necessário cadastrar pelo menos um Tipo de Material, Tipo de Construção e Entidade para adicionar Cisternas.
        </div>
    @endif
    <div>
        <a class="btn btn-info" role="button" href="{{route('cisternas.create')}}">Cadastrar Nova</a>
    </div>
    <br>
        <table class="table">
            <tr><th>Id</th><th>Nome</th><th>Cidade</th><th>Estado</th> <th>Editar</th> <th>Excluir</th></tr>
            @foreach ($cisternas as $c)
                <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->nome}}</td>
                    <td>{{$c->cidade}}</td>
                    <td>{{$c->estado}}</td>
                    <td><a href="{{route('cisternas.edit', [$c->id]) }}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                        <td>
                            <form method="POST" action="{{route('cisternas.destroy', [$c->id] )}}">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                </tr>
            @endforeach
        </table>

    @endsection

