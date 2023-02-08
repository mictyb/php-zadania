<?php
function max2(int $n1, int $n2): int{
// ktora liczba jest wieksza 

if( $n1>$n2){
echo ' liczba wieksza to ';
$wynik = $n1;
}
elseif( $n1 < $n2){
    echo ' liczba wieksza to ';
$wynik = $n2;

}
else {
    echo ' obie liczby sa rowne <br>';
$wynik = $n1;
}
return $wynik;
}
$n1= 20;
$n2=3;

echo (max2($n1,$n2));
echo '<br> teraz mamy 3 liczby i korzystamy z poprzedniej function <br>';


function max3(int $z1, int $z2, int $z3): int{
echo $z1 .$z2 .$z3;
$wynik = max2($z1, $z2);

if( $wynik < $z3){
$wynik = $z3;
}

return $wynik;


}

$z1 = 3;
$z2 = 4;
$z3 = 5;

echo (max3($z1, $z2, $z3));






/*
Napisz funkcję max2(int $n1, int $n2): int.

Funkcja przyjmuje dwie liczby, a następnie zwraca większą z nich.
Następnie napisz funkcję max3(int $z1, int $z2, int $z3): int zwracającą największą spośród trzech podanych liczb.
Funkcja max3 ma do tego celu używać funkcji max2.

*/
?>
