<?php

/**
 * estrcutura condisional simple
 * 
 * if(expresion){
 * codigoa ejecutar
 * }
 * 
 * if(expresion):
 * codigo a ejecutar
 * endif;
 */

$edad = 17;
$saludo ="hola persona";
if ($edad >= 18){
    echo "hola persona";
}

echo"<br>";
?>
<div>
    <?php if($edad >=18):?>
     <h1>
        <?=$saludo ?>
    </h1>
    <?php endif; ?>
</div>


<?php
//realizar un programa 1 numero es par gana  de lo cotratio no

$numero= 7;

if (($numero % 2) === 0) {
    echo "es par";
}


echo "<br>";


//en un almacen se hace un 20% clientes cuya compra supere los 100 dolares cual sera la cantidad pagara la persona

$total =90;

if ($total > 100) {
    $total = $total - ($total *0.20);
}

echo "El total a pagar es ${total}";