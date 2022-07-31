<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarte</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form method="post">
        <h1>Registrate!</h1>
        <div>
            <input type="text" name="nombre" placeholder="Nombre">
            <input type="text" name="apellidop" placeholder="Apellido Paterno">
            <input type="text" name="apellidom" placeholder="Apellido Materno">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="contraseña" placeholder="Contraseña">
            <input type="submit" name="boton" vaule="Registar">
        </div>
    </form>
    <?php
    include ("registar.php");
    ?>
</body>
</html>