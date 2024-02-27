<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Amigos</title>
</head>
<body>
    <h1>Números Amigos Encontrados:</h1>
    <ul>
        @foreach($resultadosAmigos as $amigos)
            <li>{{ $amigos['mensaje'] }}</li>
        @endforeach
    </ul>
</body>
</html>