<?php


$numbers = [
0 => 4,
1 => 5,
2 => 6,
3 => 7,
4 => 8,
5 => 9,
6 => 10,
7 => 11,
8 => 12,
9 => 13
];
$parzysta = 0;
$licznik = 10;
$sumOdd = 0;
echo 'liczby parzyste';
echo '<br>';
for ($i = 0; $i < $licznik; $i++){
$parzysta = $numbers[$i] % 2;
if ($parzysta == 0) {
echo $numbers[$i];
echo '<br>';
}
elseif ($parzysta != 0)

{
$sumOdd = $sumOdd + $numbers[$i];


}
}
echo 'suma liczb nieparzystych to ';
echo $sumOdd;



?>