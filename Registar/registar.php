<?php

include("db.php");

if (isset($_POST["boton"])){
    if (strlen($_POST["nombre"]) >=1 && strlen($_POST["apellidop"]) >=1 && strlen($_POST["apellidom"]) >=1 && strlen($_POST["email"]) >=1 && strlen($_POST["contraseña"]) >=1 ){
        $nombre = trim($_POST["nombre"]);
        $apellidop = trim($_POST["apellidop"]);
        $apellidom = trim($_POST["apellidom"]);
        $email = trim($_POST["email"]);
        $contraseña = trim($_POST["contraseña"]);
        $consulta = "INSERT INTO Usuarios(Nombre, Apellido1, Apellido2, Correo, Contraseña) VALUES ('$nombre','$apellidop','$apellidom','$email','$contraseña')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){
            ?>
            <h3 class="exito">Bienbenido<h3>
            <?php
        }else {
            ?>
            <h3 class="com">Upss ha ocurrido un error<h3>
            <?php
        }
    } else {
        ?>
        <h3 class="com">Completa los campos<h3>
        <?php
    }

}
?>