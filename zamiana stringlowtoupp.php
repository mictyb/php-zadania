<?php


function evenBigOddSmall(string $string): string{


//ilosc znakow
$length = strlen($string);
//zamiana wszystkich liter na male
$string = strtolower($string);






for ( $i=1; $i<$length; $i++) { 
if ( $i%2==0 ){ 
    //parzyste ida na duze litery 
    $string[$i] = strtoupper($string[$i]);
    
    
    }
else
{ 
// nieparzyste ida na male litery 
$string[$i] = strtolower($string[$i]);

 }
} 


// w 2 petli zamieniemy spacje na _
// jezeli napotka w tablicy spacje ma zamienic na podloge


//for ( $i = 0 ; $i < $length; $i++){
//if ($string[$i] == ' ') {

$string = str_replace(' ','_',$string);
//}

//}

return $string;

}


$string = 'Nice to be great developer';
echo evenBigOddSmall($string);




