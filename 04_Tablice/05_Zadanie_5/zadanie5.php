<?php

//na ujemne
$numbers = [
0 => 1,
1 => -5,
2 => -6,
3 => 6,
4 => -8,
5 => -3,
6 => -10,
7 => -11,
8 => 4,
9 => -13
];
$max = $numbers[0];


echo '<br>';




for ($i = 0; $i < 10; $i++){
if($max <= $numbers[$i]) {
$max = $numbers[$i];
}
}
echo 'maksymalna liczba to ';
echo $max;


?>