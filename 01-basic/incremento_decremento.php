<?php

/*
*
* operadores de incremento y decremento*
* 
* simbolo            Nombre
* ++                 incremento
* --                  Decremento
*
*ejemplo
*
* ++$variable          Pre-incremento
* --#variable          Pre-decremento
*/

$numero =10;

// ya que el numero tiene asidnado un valor 10 al agregar el ++ estariamos incrementando el valor del numero a 1
echo "Pre-incremento ". ++$numero;

echo"<br>";

// primero realiza la operacion luego incrementa
echo"post incremento ".$numero++;

echo"<br>";

echo $numero;


echo"<br>";

//primero resta y lugo realiza la operacion
echo "Pre-deccremento ".--$numero;

echo"<br>";

//primero realiza la operacion y luego resta la operacion
echo "post decremento" .$numero--;

echo"<br>";
// 10 + 1 =11
$resultado = ++$numero;

echo $resultado;

echo"<br>";

//incrementa el numero pero lo resta 
$resultado = $numero;+;
echo "Linea 51 ¿?".$resultado;