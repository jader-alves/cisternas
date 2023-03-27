<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FBB | Cisternas - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body>
    @include('components.cabecalho')
    <div class="container">
        @include('components.nav')
    </div>

    <br>

    <div class="container m-t ">
        <div class='jumbotron' >
            @yield('content')
        </div>
    </div>
</body>
<script src="{{asset('js/scripts.js')}}?v=0"></script>
</html>
