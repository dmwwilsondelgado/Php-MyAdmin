<?php
/**
 * 
 * esructura
 * if(?){
 *  if(?){
 *   codigo a ejecutar 
 * }else{
 *    codigo a ejecutar
 * }
 * }
 *
 */


 $a =50;
 $b = 30;
 $c = 100;

 if ($a > $b) 
 {
     if($a > $c){
        echo "$a es mayor que $b y $c";
     }
     else{
        echo "$a es mayor que $b pero es menor que $c";
     }
 }

 echo "<br>";

 if ($b > $a) 
 {
     if($b > $c){
        echo "$a es mayor que $a y $c";
     }
     else{
        echo "$b es mayor que $a pero es menor que $c";
     }
 }


 echo "<br>";

 if ($c > $a) 
 {
     if($c > $a){
        echo "$c es mayor que $b y $a";
     }
     else{
        echo "$c es mayor que $b pero es menor que $a";
     }
 }

 
echo "<br>";


$dia_de_semana= 4;

if ($dia_de_semana == 1) {
    echo "Lunes";
}
elseif ($dia_de_semana == 2) {
    echo "Martes";
}

elseif ($dia_de_semana == 3) {
    echo "Miercoles";
}

elseif ($dia_de_semana == 4) {
    echo "Jueves";
}

elseif ($dia_de_semana == 5) {
    echo "viernes";
}

elseif ($dia_de_semana == 6) {
    echo "sabado";
}

elseif ($dia_de_semana == 7) {
    echo "Domingo";
}else{
    echo "el numero no es valido a los dias de la semana ";
}