@extends('components.layout')
@section('title', 'Cadastro')
@section('content')
    <form  class="form-control" method="POST" action="{{route('tipo_material.update', [$tipoMaterial->id] )}}">
        @method('PUT')
        @include('tipo_material._form')
    </form>
 @endsection
