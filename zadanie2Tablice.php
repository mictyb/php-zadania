<?php

function cutAndWrite(array $array): string{

$countParts = count($array);


if($countParts <4){

    echo "powinno zwrócić false ponieważ tablica ma mniej niż 4 elementy";
}
else {
for($i=1; $i<$countParts; $i++){

echo $array[$i] ."_";

}
}
return "";


}


$arr = [ "allllllll", "ma", "czarnego", "kota"];


cutAndWrite($arr);
