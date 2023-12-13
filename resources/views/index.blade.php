<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @vite('resources/css/app.css')
    @vite('resources/css/app.css')
    <header class="principal">
        <h2>LOGO</h2>
        <input class="search" type="text" name="search" placeholder="Search">
        <nav class="links">
            <a href="{{route('session')}}">Iniciar Sesion</a>
            <a href="{{route('register')}}">Registrarse</a>
        </nav>
    </header>

   @yield('session')
   @yield('content')

</body>

</html>
