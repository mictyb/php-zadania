<?php

function switchString(string $string): string{


//odwaracamy kolejnosc znakow 
$string = strrev($string);
//echo $string .'<br>';



//wycinka 5 pierwszych znakow
$string = substr($string, 5);


// czy string ma mniej niz 5 znakow

$length = strlen($string);
if($length < 5)
{
$string = 'pusto';

}


return $string;


}



$text ='abcdefghfghjkoil';
var_dump(switchString($text));
