<?php

function nextDecade(string $date): void{

$date = strtotime($date);
echo date('F j, Y', $date) ."<br>";

echo " rocznica w ciagu najblizszych 10 lat " ."<br>";
for( $i = 1 ; $i <= 10; $i++){
$NextTenyears = strtotime("+ $i year", $date);
echo date('z', $NextTenyears) ." dzien roku " .date('F j, Y D', $NextTenyears) ."<br>";
}








}




$date = '2016-03-01';

nextDecade($date);
