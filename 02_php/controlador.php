<?php

echo count( $_REQUEST['check']);



$nombre="";
$apellido ="";
$edad = "";
$email="";
$errores = [];
if (isset($_REQUEST['nombre']) && empty($_REQUEST ['nombre'])) {
   array_push($errores, "el campo nombre es requerido");
}
if (isset($_REQUEST['apellido']) && empty($_REQUEST ['apellido'])) {
    array_push($errores, "el campo apellido  es requerido");
}
if (isset($_REQUEST['edad']) && empty($_REQUEST ['edad'])) {
    array_push($errores, "el campo edad  es requerido");
}

if (isset($_REQUEST['email']) && empty($_REQUEST ['email'])) {
    array_push($errores, "el campo email  es requerido");
}

   echo "<ul>";
    for ($i=0; $i < count($errores) ; $i++) { 
        echo "<li>". $errores[$i] ."</li>";
        
    }
    echo "</ul>";

    if ($errores) {
        # code...
    }