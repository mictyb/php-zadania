
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
$sum = 0;
$licznik = 10;

for ($i = 0; $i < $licznik; $i++){
$sum = $sum + $numbers[$i];


}
echo ' suma elementow tablicy to ' .$sum;

?>