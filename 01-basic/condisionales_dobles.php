<?php

/**
 * estructura condicional doble (if + else)
 * 
 * if(expresion){
 * codio a ejecutar si la expresion es verdadera
 * } else{
 * codigo es falsa
 * }
 * 
 * if(expresion):
 * si es verdadera
 * else: 
 * si es falsa
 * endif;
 */

 if(1 > 7){
    echo "condicion evaluaa veradero";
 }else{
    echo "condicion evalua a falso";
 }

 echo"<br>";

 if(9 == 12):
    echo "condicion evalua a verdadero";
 else:
    echo "condicion evalua es falsa";
 endif;

 echo "<br>";
 //calcualar el total  que debe pagar una persona en un montallantas,el precio cada llanta es 800 y si se compra menos de 5 llantass y de 700 si se compra 5 o mas llantas

 $llantas = 4;
 
 if ($llantas < 5) {
    echo "el presio de la llantas es 800";
 }else{
    echo "el presio de las llatas es 700";
 }


echo "<br>";


 // determinar si un alumna repureba o aprueba el curso sabiendo que aprobara si su promedio de 3 calificaciones y su promedio tendra que ser mayor o = 3.0 de lo caso contrario reprueba

$calificacion1 =3.0;
$calificacion2 = 4.0;
$calificacion3 =2.0;

$promedio = ($calificacion1 + $calificacion2 + $calificacion3) / 3;

if ($promedio >= 3.0) {
    echo "aprobado";
}else{
    echo "Reprobado";  
}


echo "<hr><br>";

// (8 >= 10) ? echo "verdadero"; echo "es falso";

/**
 * operador ternario
 * operador ? true : false;
 */

 // si el primero es mayor lo multiplicamos caso contrario se divide

 $a=8;
 $b=2;
 
 echo ($a > $b) ? ($a * $b): ($a / $b);