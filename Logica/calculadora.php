<?php



$a = 25;
$b = 30;

$divicion = $a/$b;
$multiplicacion = $a*$b;
$suma =  $a+$b;
$resta =  $a-$b;

function Calculadora(){
    try {
        //code...
        if($b == 0){
            throw new Exception('No se puede dividir en 0');       
        }
        $respuesta  = array(
            "sumar" => $suma,
            "restar " =>$resta, 
            "multiplicar" => $multiplicacion, 
            "dividir" => $divicion,  
            )
            return $respuesta;

    } catch (\Throwable $th) {
        //throw $th;
        return $e -> getMessge
    }
    $respuesta  = array(
        "sumar" => $suma,
        "restar " =>$resta, 
        "multiplicar" => $multiplicacion, 
        "dividir" => $divicion,  
        )
        return $respuesta;
}



$resultado = Calculadora($a,$b);
echo '<pre>';
print_r($resultado);
echo '</pre>';





// los alumnos del un curso se han dividvido de acuuerdo con el sexxxo y nombre el grupo a esta formado pro al mujeres con nombre anterior ala M 
// y los hombres porterio ala n
//y el grupó BB por el Resto 
// escribir un programa que pregunte pór su nombre y sexo y que muestre a que grupo corresponde


$M = "Masculino";
$F = "Femenino";

function grupo($nombre,$sexo){
    if($sexo === "F"&& strtoupper($nombre) < "M" || $sexo === "M" && strtoupper($nombre) > "N"){
        $sexo === "M" $$ strtoupper($nombre)
    }
}


// en una farmacia aplica el precio de los remedios de 10% hacer un programa que calucle el valor del descuento  y el precio final


$precio = 1000;
$descuento = 0.10;


function Farmacia($precio,$descuento){
    if($precio != 0){
        $descuento = 100 - ($precio * 100 / $precio);
         return $mensaje = "$ eel descuento del medicamento es de {$descuento} ";
        else{
            $mensaje = "el precio es {$precio}";
        }
    }
}

$resultadoFinal = Farmacia($precio,$descuento)

echo '<pre>';
print_r($mensaje);
echo '</pre>';




// cree una funcion que calcule la longitu de una plabara si es corta o es larga    (las palabra cortas son de 5 Caracteres)




$palabra1 = "Corta"


function PalabraCortas($palabra1,$palabra2){
    if ($palabra1 === 5){
        return $resultadf "corta palabra "
        else{

        }
    }
}



// escriba una funcion que tome una cadena y devuelbva una nueva cadena sin las vocales 


echo '<br>'
function sinVocales($cadena){
    $vocales = ['a','e','i','o','u']
    $cadenas_sin_Vocales = str_replace($vocales, ''$cadena)
}




// $Palabra = "chmod";
// $abecedario = "abcdefghijklmnñopqrstuvwz";
// $cadenassinVocales = = str_replace($cadena, ''$vocales)


echo '<br>'

$cadena = "Esto es un saludo: hola";
echo preg_match("hola", $cadena); 






// creee una funciion para calcular una palabra 