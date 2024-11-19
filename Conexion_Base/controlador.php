<?php

require('conexion.php');
// variables para consultar
$db = new Conexion(); // se instancia el objeto
$conexion = $db->getConexion();//
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$id_genero = $_POST['id_genero'];
$id_ciudad = $_POST['id_ciudad'];

$sql = "INSERT INTO USUARIOS(nombre,apellido,correo,fecha_nacimiento,id_genero,id_ciudad)
VALUES(:nombre,:apellido,:correo,:fecha_nacimiento,:id_genero,:id_ciudad)";


$stm = $conexion->prepare($sql);

$stm->bindParam(":nombre",$nombre);
$stm->bindParam(":apellido",$apellido);
$stm->bindParam(":correo",$correo);
$stm->bindParam(":fecha_nacimiento",$fecha_naccimiento);
$stm->bindParam(":id_genero",$id_genero);
$stm->bindParam(":id_ciudad",$id_ciudad);

$stm->execute();