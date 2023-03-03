<?php

function convertDate(string $date, int $days, int $hours, int $minutes, int $seconds): string
{



    $someTime = strtotime("$date + $days days + $hours hours + $minutes minutes
          +  $seconds seconds");

    echo date('d.m.Y H:i:s', $someTime) . '<br>';
//echo strtotime($date) .'<br>';
return $date;

}




 $date = "19.10.2016 15:14:24";
$days = 1;
$hours = 2;
$minutes = 3 ;
$seconds = 3 ;
echo convertDate( $date, $days, $hours, $minutes, $seconds);


