@extends('components.layout')
@section('title', 'Cadastro')
@section('content')
    <form  class="form-control" method="POST" action="{{route('cisternas.update', [$cisterna->id] )}}">
        @method('PUT')
        @include('cisternas._form')
    </form>
 @endsection
