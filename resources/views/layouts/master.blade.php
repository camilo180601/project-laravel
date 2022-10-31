<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo: @yield('title')</title>
</head>
<body>
    <!-- yield = contenido variable & section = contenido variable -->
    
    @section('header')
        Header de la web (master)
    @show
    <hr>
    <div class="container">
        @yield('content')
    </div>
    
    @section('footer')
        Footer de la web (master)
    @show

</body>
</html>