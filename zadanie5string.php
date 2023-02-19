<?php

function checkLeapYear(string $string): string{
echo $string .'<br>';

$sub0 = substr($string, 0, 3);
$sub1 = substr($string, 3, 2);
$subyear = substr($string, 6, 4);
$sub2 = substr($string, 10);
$subHours = substr($string, 11, 2);
$subMinutes = substr($string, 13, 4);
$subSecond = substr($string, 17, 2);


if($subyear%4 == 0){
    echo 'jest to rok przestępny i miesiąc &nbsp'   .$sub1 .'&nbsp więc zmianiamy na +2' .'<br>';
 $sub1= $sub1+1;
 if($sub1 > 12){

$sub1 = $sub1 - 12;
$string= $sub0 .$sub1 .'.'.$subyear .$sub2;
 }
}
elseif( $subSecond <=23){
echo 'nie jest to rok przestępny więc zamieniamy miejscami godziny i sekundy' .'<br>';
$subHoursNew = $subSecond;
$subSecondNew = $subHours;
$string= $sub0 .$sub1 .'.'.$subyear  ."&nbsp" .$subHoursNew .$subMinutes .$subSecondNew;
}
else {
$string = 'pusty napis';

}



 


return $string;

}

$dateString = '15.12.2011 11:08:20';

echo checkLeapYear($dateString);
