@extends('components.layout')
@section('title', 'Cadastro Tipo Construcao')
@section('content')
    <form method="POST" action="{{route('entidades.store')}}">
        @include('entidades._form')
    </form>
@endsection
