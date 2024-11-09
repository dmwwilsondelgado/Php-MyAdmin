<?php

/**
 * 
 * -----Simbolo----------------------Nombre--------
 *      and                          and (y)
 *      or                           or (o)
 *      !                            not (no)
 *      &&                           and (y)
 *      ||                           or (o)
 * 
 * -----Tabla de operadores AND 
 * 
 * Exprecion 1                  Exprecion 2                  Resultado
 * False           &&           False                        False
 * False           &&           True                         False
 * True            &&           True                         True
 * True            &&           False                        False
 *
 */

$valor1 = 7;
$valor2 = 2;

var_dump($valor1 = 7 && 2 > 3);
echo "<br>";
var_dump($valor1 = 7 && 9 > 3);

/**
 * ----------Tabla de operador or
 * Exprecion 1                  Exprecion 2                  Resultado
 * False           ||           False                        False
 * False           ||           True                         True
 * True            ||           False                        True
 * True            ||           True                         True
 */

var_dump($valor1 == 7 or 2 > 3);
echo "<br>";
var_dump($valor1 == 5 || 9 > 3);
echo "<br>";
var_dump($valor1 == 5 || 1 > 3);