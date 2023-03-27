@extends('components.layout')
@section('title', 'Cadastro Tipo Construcao')
@section('content')
    <form method="POST" action="{{route('cisternas.store')}}">
        @include('cisternas._form')
    </form>
@endsection
