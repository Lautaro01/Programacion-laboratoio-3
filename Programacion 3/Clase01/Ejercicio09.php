<?php

$var = array();
$suma = 0;
$promedio = 0;

for($i = 1 ; $i <= 5 ; $i++)
{
 $var[$i] = rand(1,10);
 $suma+=$var[$i];         
 echo "El numero en la posicion '" . $i . "' Es: " . $var[$i] . "<br>";                                          
}

$promedio = $suma/5;
echo "La suma es " . $suma . " Y el promedio es: " . $promedio . " Por lo tanto ";

if($promedio < 6)
echo "El promedio es menor a 6";
else if($promedio > 6)
echo "El promedio es mayor a 6";
else if($promedio == 6)
echo "El promedio es igual a 6";

?>