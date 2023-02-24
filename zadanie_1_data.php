<?php

function dateDiff(string $date1, string $date2): void{

// echo date($date1);
// echo date($date2);

$dif = strtotime($date2) - strtotime($date1);
echo $dif .'<br>';
$year = floor($dif / (365*24*60*60));
$month = floor( ($dif- ($year*365*24*60*60))  / (30*24*60*60));
$days = floor( ($dif- ($year*365*24*60*60) - ($month*31*24*60*60))  / (24*60*60));
$hours= floor( ($dif- ($year*365*24*60*60) - ($month*31*24*60*60) - ($days*24*60*60))  / (60*60));
//$hours = floor($dif / (60*60));
$mins = floor($dif / (60));

echo ' roznica w czasie to lata' .$year ."<br>"."miesiecy: " .$month ."<br>" ."days" .$days ."<br>" ."hr =" .$hours;
//."godziny: "  .$hours ."<br>" ."mins: " .$mins;

}

$date1 = "19.10.2016 15:14:24";
$date2 = "22.11.2018 19:14:24";

dateDiff($date1, $date2);
