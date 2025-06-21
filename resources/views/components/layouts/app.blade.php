@livewireStyles
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <title>Mini Gestión Estudiantes</title>
        @vite('resources/css/app.css')
        @vite('resources/css/bootstrap.min.css')
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @livewireStyles
    </head>

    <body class="bg-light text-dark">
        {{ $slot }}

        @livewireScripts
        @vite('resources/js/app.js')
        @vite('resources/js/bootstrap.bundle.min.js')
    </body>

</html>

@livewireScripts
