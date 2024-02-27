<!DOCTYPE html>
<html>
<head>
    <title>Calcular Promedio</title>
</head>
<body>
<form action="/calcular-promedio" method="post">
   @csrf
   <label for="nota1">Nota 1:</label>
   <input type="number" name="nota1" required><br>

   <label for="nota2">Nota 2:</label>
   <input type="number" name="nota2" required><br>

   <label for="nota3">Nota 3:</label>
   <input type="number" name="nota3" required><br>

   <button type="submit">Calcular Promedio</button>
</form>
</body>
</html>