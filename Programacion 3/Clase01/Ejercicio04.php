<?php 
$numero = 1;
$suma = 0;

while($suma < 1000)
{
    echo "Numero = ", $numero . "   ";
    $suma += $numero;
    echo "la suma es = ", $suma;
    echo "<br>";
    $numero++; 
    
}

?>