<!DOCTYPE html>
<html lang="es">
    <head>
        <title>
            @yield('titulo')
        </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    </head>

    <body>
        
        <div class="container">
            @yield('contenido')
            <script src="{{asset('js/funExportacion.js')}}"></script>
        </div>
    </body>
</html>

