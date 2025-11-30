<!DOCTYPE html>
<html lang="en">
    <style>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>
</head>
<body style="background-color: rgb(0, 0, 0); font-family: monospace;">
    <a href="{{ route('index') }}">saludo</a>
    <a href="{{ route('imagen') }}">imagen</a> 
    <a href="{{ route('php') }}">php</a> 
    @yield('content')
    <p style="color: #16C809">Hola, soy una plantilla Base</p>
</body>
</html>