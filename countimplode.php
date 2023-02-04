<?php
function cutAndWrite(array $array) 
//sprawdzenei czy mamy 4 sloawa
{
   $ileslow = count($array);
if ($ileslow < 5){
return 'false';
}



// teraz druga czesc 
// tworze zmienna glue

$glue = array_slice($array, 1, 3);
$text = implode('_', $glue);
echo $text;
}

$arr = ["Ala", "ma", "czarnego", "kota"];
$result = cutAndWrite($arr);
echo $result;


?>
