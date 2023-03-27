@extends('components.layout')
@section('title', 'Entidades')
@section('content')
<div class='float-left'>
    <a class="btn btn-info" role="button" href="{{route('entidades.create')}}">Cadastrar Nova</a>
</div>
<br>
    <table class="table">
        <tr><th>Id</th><th>Nome</th> <th>Editar</th> <th>Deletar</th> </tr>
        <tbody>
            @foreach($entidades as $t)
                <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->nome_fantasia}}</td>
                    <td><a href="{{route('entidades.edit', [$t->id]) }}"><button type="button" class="btn btn-primary">Editar</button></a></td>
                    <td>
                        <form method="POST" action="{{route('entidades.destroy', [$t->id] )}}">
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
