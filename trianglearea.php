<?php


function triangleArea(float $a, float $height, float &$area): string
{

$area = ($a * $height)*0.5;
return "pole trojkata o boku " .$a .'wysokosci  ' .$height .'wynosi = ';
}




$a= 4.0;
$height= 6.0;

$pole = 4.0;
$area = &$pole;
var_dump(triangleArea($a,$height, $area));
 
 echo '&nbsp' .$pole;
?>
