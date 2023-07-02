<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista 1</title>
</head>
<body>
    <h1>Hola Mundo</h1>
    <h1>
        @php
            echo 'vista1'
        @endphp
    </h1>
    <br>
    <h1>El nombre de usuario es: <strong>{{ $Nombre }}</strong></h1>
</body>
</html>
