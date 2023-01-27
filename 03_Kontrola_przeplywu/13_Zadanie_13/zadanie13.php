<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 13</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
$points = 98;
//zadanie z if
//sprawdzenie warunkow brzegowych

if ( $points >= 0 and $points <= 100){


//ocena
if (  0 < $points  and $points <= 39 )
 {
$points = 'ocena niedostateczna';
}
elseif ( 40 < $points  and $points < 54 )
 {
$points = 'ocena dopuszczajaca';
}
elseif ( 55 < $points  and $points < 69 )
 {
$points = 'ocena dostateczna';
}
elseif ( 70 < $points  and $points < 84 )
 {
$points = 'ocena dobra';
}
elseif ( 85 < $points  and $points < 98 )
 {
$points = 'ocena bardzo dobra';
}
elseif ( 99 < $points  and $points < 100 )
 {
$points = 'ocena celujaca';
}

echo 'wynik testu = ';
echo $points; 



}
elseif( $points > 100 ){
echo 'liczba pkt wieksza niz 100';

}

else
echo 'liczba pkt mniejsz niz 0';

//teraz rzezbie switch 
echo ' teraz switch';
echo '<br>';
$minus;
$over100;
if ($points < 0) {
$minus = -1;

switch($minus) {
case -1: 
echo "liczba pkt mniejsza niz zero ";
break;
}
}
elseif ($points > 100 ) {
$over100 = 101;
switch($over100) {
case 101: 
echo "liczba pkt wieksza niz 100 ";
break;
}
}
else {
if (  0 < $points  and $points <= 39 )
 {
$points = 'ocena niedostateczna';
}
elseif ( 40 < $points  and $points < 54 )
 {
$points = 'ocena dopuszczajaca';
}
elseif ( 55 < $points  and $points < 69 )
 {
$points = 'ocena dostateczna';
}
elseif ( 70 < $points  and $points < 84 )
 {
$points = 'ocena dobra';
}
elseif ( 85 < $points  and $points < 98 )
 {
$points = 'ocena bardzo dobra';
}
elseif ( 99 < $points  and $points < 100 )
 {
$points = 'ocena celujaca';
}

echo 'wynik testu = ';
echo $points; 
}






















?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>