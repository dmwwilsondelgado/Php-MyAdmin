<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="controlador.php" method="get">
        <div>
        <label for="nombre">Ingrese el nombre</label>
        <input type="text" name="nombre" id="nombre">
    </div>
    <br>
    <div>
        <label for="apellido">Ingrese el apellido</label>
        <input type="text" name="apellido" id="apellido">
    </div>
    <br>
    <div>
        <label for="numero">Ingrese la edad</label>
        <input type="text" name="edad" id="edad">
    </div>
      <br>
    <div>
        <label for="nombre">Ingrese el email</label>
        <input type="text" name="email" id="email">
    </div>
    <br>
    <div>
        <label for="lenguaje">escoja lenguaje</label>
        <br>
        <input type="checkbox"name="check[]" id="r1" value="css"><label for="r1">css</label>
        <br>
        <input type="checkbox"name="check[]" id="r2" value="html"><label for="r1">html</label>
        <br>
        <input type="checkbox" name="check[]" id="r3" value="js"><label for="r1">js</label>
    </div>
    <br>
        <button type="submit">enviar</button>
    </form>
</body>
</html>