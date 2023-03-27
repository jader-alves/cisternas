@extends('components.layout')
@section('title', 'Cadastro')
@section('content')
    <form method="POST" action="{{route('tipo_material.store')}}">
        @include('tipo_material._form')
    </form>
@endsection
