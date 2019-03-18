<?php
$a = 6;
$b = 9;
$c = 8;

if($a > $b && $a < $c || $a < $b && $a > $c)
{
    echo "El numero del medio es A"; 
}
else if($b > $a && $b < $c || $b < $a && $b > $c)
{
    echo "El numero del medio es B";
}
else if($c > $a && $c < $b || $c < $a && $c > $b)
{
    echo "El numero del medio es C";
}
else
{
    echo "no hay numero del medio";
}



?>