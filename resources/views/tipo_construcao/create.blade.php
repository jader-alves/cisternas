@extends('components.layout')
@section('title', 'Cadastro Tipo Construcao')
@section('content')
    <form method="POST" action="{{route('tipo_construcao.store')}}">
        @include('tipo_construcao._form')
    </form>
@endsection
