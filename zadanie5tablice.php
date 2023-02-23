<?php

function sherlock($el, $array, &$index): void {

if($isArr = is_array($array)) {

if ( $inArr = in_array($el, $array)){

$wynik = 'szukany element ' .$el ." jest w tablicy " ;



}
else{
$wynik = 'szukany element ' .$el ." nie jest w tablicy " ;
}

}
else {
    $wynik =  "false";
}
echo $wynik;

}

$el =6;
$arr = [1, 2, 3, 4, 5];
$position = 0;


sherlock($el, $arr, $position);
