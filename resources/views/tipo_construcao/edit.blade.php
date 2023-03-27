@extends('components.layout')
@section('title', 'Cadastro')
@section('content')
    <form  class="form-control" method="POST" action="{{route('tipo_construcao.update', [$tipoConstrucao->id] )}}">
        @method('PUT')
        @include('tipo_construcao._form')
    </form>
 @endsection
