<?php

$estudiantes = array("Carlos", "Jose", "Maria", "Luis");

echo "<pre>";
/*var_dump($estudiantes);*/
print_r($estudiantes);
echo "</pre>";

echo $estudiantes[2];

$Aprendiz = [
  "nombre" => "Reinel",
  "apellido" => "Hernandez",
  "edad" => 17,
  "deudas" => "3.700.000.00"
];

echo "<pre>";
print_r($Aprendiz);
echo "</pre>";

$tutor = [ 
  "nombre" => "Reinel",
  "apellido" => "Hernandez",
  "edad" => 17,
  "direccion" => [
    "ciudad" => "Giron",
    "Barrio" => "Dangond",
    "nomenclatura" => "Carrera 8A 109-04 Apto 101",
    "zipcode" => "2894667"
],
"Habilidades" => [
  "git", "html", "css", "js", "php", "python", "slq"
]
];

echo "<pre>";
print_r($tutor);
echo "</pre>";


echo "<pre>";
print_r($tutor ["direccion"]["nomenclatura"]);
echo "</pre>";

echo "<pre>";
print_r($tutor ["Habilidades"][4]);
echo "</pre>";

$tutor["Habilidades"][3] = "JavaScript";

$tutor["direccion"]["departamento"] = "Santander";

array_splice($tutor ["Habilidades"],4,2);
