<?php


$n=5;

echo 'n = 5' .'<br>';


// i wiersz
//j kolumna

for ($i = 1; $i <= $n; $i++){


for ( $j= 1; $j<= $n; $j++ ){

if ( $i>= $j){
echo ' *';
}
else {
echo $j;
}
}
echo '<br>';
}

//zamiana

for ($i = $n; $i >= 1 ; $i--){


for ( $j = 1; $j <= $n; $j++ ){

if ( $i >= $j){
echo ' *';
}
else {
echo $j;
}
}
echo '<br>';
}




?>
