@extends('components.layout')
@section('title', 'Cadastro')
@section('content')
    <form  class="form-control" method="POST" action="{{route('entidades.update', [$entidade->id] )}}">
        @method('PUT')
        @include('entidades._form')
    </form>
 @endsection
