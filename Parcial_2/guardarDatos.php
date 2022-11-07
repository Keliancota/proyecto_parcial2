<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];
    $correo_electronico = $_POST["correo_electronico"];
    $domicilio = $_POST["domicilio"];
    $telefono = $_POST["telefono"];
    $puesto = $_POST["puesto"];

    $sql = "INSERT INTO usuarios (nombre, edad, correo_electronico, domicilio, telefono, puesto)". 
    "VALUES ('".$nombre."', ".$edad.", '".$correo_electronico."','".$domicilio."', '".$telefono."', '".$puesto."')";

    if($conexion->query($sql) === TRUE){
     echo "Registro guardado con éxito <a href='consultarDatos.php'>Regresar</a>";
    }
    else{
     echo "Error: " .$sql. "<br>" .$consexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>;";

    }

    $conexion->close();

?>