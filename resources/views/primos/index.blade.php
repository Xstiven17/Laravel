<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
</head>
<body>
    <h1>Números Primos Generados:</h1>
    <ul>
        @foreach($resultadosPrimos as $resultado)
            <li>{{ $resultado['mensaje'] }}</li>
        @endforeach
    </ul>
</body>
</html>
