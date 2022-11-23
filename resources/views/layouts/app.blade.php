<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta-descripcion','valor por defecto')">
    <title>Proyecto Adsi 2022 - @yield('title')</title>
    
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    @include('partials.navigation')

    @yield('content')
</body>
</html>

