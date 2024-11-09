<?php

$texto = "Fundamentos de programacion en PHP";

$asignacion = $texto;

$referencia = &$texto;

echo $asignacion;
echo "<br>";
echo $referencia;
$texto = "Asignacion por referencia";
echo "<br>";
echo $referencia;
echo "<br>";
echo $asignacion;
