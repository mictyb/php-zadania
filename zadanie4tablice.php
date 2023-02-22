<?php

function firstLast(array $array): void{

print_r($array);
$countParts = count($array);
echo '<br>';
for( $i = 0 ; $i< $countParts; $i++){

$first = array_shift($array);
echo $first .'<br>';
$countParts = $countParts -1;
echo 'tablica ma elementow : ' .$countParts .'<br>';
$last = array_pop($array);
$countParts = $countParts -1;
echo $last .'<br>';
echo 'tablica ma elementow : ' .$countParts .'<br>';

}

}


$arr = ['Programista', 'zna', 'tablicowe', 'funkcje', 'PHP'];

firstLast($arr);
