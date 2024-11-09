<?php

$numero=10;

switch ($numero) {
    case 1:
        echo "lunes";
        break;
    
    case 2:
        echo "martes";
        break;
    case 3:
        echo "Miercoles";
       break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "viernes";
        break;
    case 6:
        echo "sabado";
        break;
    case 7:
        echo "Domingo";
        break;

    default:
        echo "ese dia no existe";
        break;
}