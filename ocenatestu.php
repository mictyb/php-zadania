<?php
    
$points;
$points = -45;
$wynik;
echo ' liczba pkt z testu '.$points .'<br>';


if ($points > 0 and $points < 100){

if ($points <= 39 ){
echo 'ocena niedostateczna';
}
elseif ($points <= 54 ){
echo 'ocena dopuszczajaca';
}
elseif ($points <= 69 ){
echo 'ocena dostateczna';
}
elseif ($points <= 84 ){
echo 'ocena dobra';
}
elseif ($points <= 98 ){
echo 'ocena bardzo dobra';
}
elseif ($points <= 100 ){
echo 'ocena celujaca';
}
}


else {
echo ' liczba pkt z testu ponizej zera  ';
}
// teraz switch 


?>
