<?php


function foundAndReplace(array $array): array{
//wyszukanie pozycji w stringu 
echo 'orginalne emaile ';
var_dump($array);
echo '<br>';


$pos1 = strpos($array[0], '@');
$pos2 = strpos($array[1], '@');

$newarray = [$pos1, $pos2];

echo 'pozycje malpy : ';
var_dump($newarray);
echo '<br>';


//zamaiana domeny
// do maly wycinamy
$str0 = strstr($array[0], '@',true);
//od malpy wycinamy
$str1 = strstr($array[0], '@');
$str2 = strstr($array[1], '@', true);
$str3 = strstr($array[1], '@');
//echo $str0 .'<br>'.$str1 .'<br>'.$str2  .'<br>'.$str3.'<br>';





//zamiana calego stringa str1 czyli po malpie na @gmail.com
$str1 = str_replace($str1,'@gmail.com', $str1);
$str3 = str_replace($str3,'@gmail.com', $str3);
//echo $str1 .$str3 .'<br>'; 

//to na dole to moj pomysl idea - laczymy tablice
$array = [ $str0.$str1, $str2.$str3];
//var_dump($array);












return $array;

}

$mail = ['john.doe@interia.pl', 'mark.willow@wp.pl'];

var_dump(foundAndReplace($mail));
