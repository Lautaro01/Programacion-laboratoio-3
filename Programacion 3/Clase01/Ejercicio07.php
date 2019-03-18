<?php 

$dia = date("d");
$diaNombre = date("l");
$mes = date("n");
$año = date("Y");
echo "Hoy es: " . $diaNombre ." ". $dia ."/". $mes."/". $año . "<br>";

echo "la fecha actual es " . date("d") . " del " . date("m") . " del " . date("Y");

?>