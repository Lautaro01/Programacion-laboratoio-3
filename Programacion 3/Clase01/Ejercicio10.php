<?php
$var = array();
$numeros = 0;
$indice = 0;

while(count($var) <= 10)
{
    if(!($numeros%2) == 0)
    {
        $var[$indice] = $numeros;
        $indice++;
    }   
    $numeros++;
}
for($i = 0 ; $i <= 10 ; $i++)
{
    echo $var[$i] . "<br>";
}

?>