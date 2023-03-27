@extends('components.layout')
@section('title', 'Tipo de Material')
@section('content')

<div class='float-left'>
    <a class="btn btn-info" role="button" href="{{route('tipo_construcao.create')}}">Cadastrar Novo</a>
</div>
<br>
    <table class="table">
        <tr><th>Id</th><th>Nome</th> <th>Editar</th> <th>Deletar</th> </tr>
        <tbody>
            @foreach($tipo_construcoes as $t)
                <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->nome}}</td>
                    <td><a href="{{route('tipo_construcao.edit', [$t->id]) }}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                    <td>
                        <form method="POST" action="{{route('tipo_construcao.destroy', [$t->id] )}}">
                            {{ method_field('DELETE') }}
                            @csrf
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
