<?php


$tablica = [1,2,3,4,5,6,7,8,9,mt_rand(0, 20)];



$tablicaSize = count($tablica);
echo $tablicaSize;
$sum = 0;
for ($i=0 ; $i < $tablicaSize; $i++)
{
$sum = $sum + $tablica[$i];


}

echo 'suma tablicy wynosi :' .$sum;




?>
