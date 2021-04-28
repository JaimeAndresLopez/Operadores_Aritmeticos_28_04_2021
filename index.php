<?php
//Suma
    $numero1 = (int) 8;
    $numero2 = (int) 5;
// Significado
    //$resultado = (int) $numero1 + $numero2;
    //echo "$resultado <br>"; //13
// Abrebiado
    //$numero1 += $numero2;
    //echo $numero1; //13 pero queda en numero1
//Resta
//Significado
    $resultado = (int) $numero1 - $numero2;
    //echo $resultado;//
// Abrebiado
    $numero1 -= $numero2;
    echo $numero1;
// Multiplicacion
// Significado
$resultado = (int) $numero1 * $numero2;
echo $resultado;
// Abrebiado
    $numero1 *= $numero2;
    echo $numero1;
// Division
// Significado
$resultado = (int) $numero1 / $numero2;
echo $resultado;
// Abrebiado
    $numero1 /= $numero2;
    echo $numero1;
//Modulo
//Significado
    $resultado = (int) $numero1 % $numero2;
    echo $resultado;
// Abrebiado
    $numero1 %= $numero2;
    echo $numero1;
//Potencia
//Significado
$resultado = (int) $numero1 ** $numero2;
echo $resultado;
// Abrebiado
$numero1 **= $numero2;
echo $numero1;
// Ejemplos

    // echo ($num1 + $num2) + (($num1 - $num2) + 2) * 10;
    // echo $num1 + $num2 * 2;
    // echo "<br>";
    // echo ($num1 + $num2) * 2;
    // echo "<br>";
    // echo (1-($num1 + $num2)) * 2;
    // echo "<br>";
    // echo 2 * $num1 + $num2;
// Operado post Incremento/decremento
 $i = (int) 0;
 $x = (int) 5;
//post inc
$i++;
$i++;
echo $i;
//post dec
$x--;
echo $x;
// Operado pre Incremento/decremento
//pre inc
++$i;
++$i;
echo $i;
//pre dec
--$x;
echo $x;
?>