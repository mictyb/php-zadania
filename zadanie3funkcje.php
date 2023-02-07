<?php

function exchange(int $quote, int $a, int $b, int $c , int $d): int

{
$n1= 0;
$n2= 0;
$n3= 0;
$n4= 0;

// liczba wieksza od 10 zl 

if($quote > $a){
$n1 = floor($quote/$a);
$quote = $quote - ($a * $n1);

$n2 = floor($quote/$b);
$quote = $quote - ($b * $n2);

$n3 = floor($quote/$c);
$quote = $quote - ($c * $n3);

$n4 = floor($quote/$d);
$quote = $quote - ($d * $n4);

}
// liczba z zakresu 5 -10 zl 
elseif( $quote <$a & $quote >= $b) {
$n2 = floor($quote/$b);
$quote = $quote - ($b * $n2);

$n3 = floor($quote/$c);
$quote = $quote - ($c * $n3);

$n4 = floor($quote/$d);
$quote = $quote - ($d * $n4);

}
// liczba z z 
elseif( $quote <$b & $quote >= $c){
$n3 = floor($quote/$c);
$quote = $quote - ($c * $n3);

$n4 = floor($quote/$d);
$quote = $quote - ($d * $n4);
}


elseif($quote == $d){
$n4 = floor($quote/$d);
$quote = $quote - ($d * $n4);


}
//  tablica i zwrot

$quoteArray = [
    $a     => $n1,
    $b     => $n2,
    $c     => $n3,
    $d     => $n4,
];
//return $n1 .$n2 .$n3 .$n4;

return print_r($quoteArray);
}

// kwota
$quote = 188;


// nominaly

$a = 10;
$b = 5;
$c = 2;
$d = 1;

exchange($quote, $a, $b, $c, $d);


?>
