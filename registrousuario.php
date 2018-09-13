<?php

include_once 'conexion.php';

if($_POST){
    $usuario= $_POST['usuario'];
    $correo= $_POST['correo'];
    $contrasenia= $_POST['contrasenia'];
    $contraseniados= $_POST['contraseniados'];

    $sql_agregar='INSERT INTO usuarios (usuario,correo,contrasenia,cotraseniados) VALUES (?,?,?,?)';
    $sentencia_agregar =$pdo->prepare($sql_agregar);
    $sentencia_agregar->execute(array($usuario,$correo,$contrasenia,$contraseniados));

    header('location:registro.html');
}
?>