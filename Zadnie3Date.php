
<?php

function dateIsOk(array $datesArray): array{



for ( $i=0 ; $i < 4 ; $i++ ){

 $text = $datesArray[$i];


$parts = explode('.', $text);
$day = $parts[0];
$month = $parts[1];
$year = $parts[2];
var_dump(checkdate($month, $day , $year));
if (checkdate($month, $day , $year)){
    $datesArray[$i] = $datesArray[$i] ."_ok.  ";
echo $datesArray[$i];
}
else {
$datesArray[$i] = $datesArray[$i] ."_nok.  ";
echo $datesArray[$i];
}

}




// var_dump(checkdate($zm));



return $datesArray;


}




$datesArray = ['31.02.2016', '19.03.1986', '99.09.2013', '05.04.1974', '31.04.2030'];

 dateIsOk($datesArray);
