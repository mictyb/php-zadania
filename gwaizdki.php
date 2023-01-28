<?php
$n = 5;
echo ' n = 5' .'<br>';

//i wiersz

//j kolumna 

for($i = 1; $i <= $n ; $i++){

for( $j = 1; $j<= 5 ; $j++ ) {
if ( $i >= $j){
echo '*';
}
else {
echo $j;

}

}
echo '<br>';
}


$n = 3;
echo ' n = 3' .'<br>';

//i wiersz

//j kolumna 

for($i = 1; $i <= $n ; $i++){

for( $j = 1; $j<= $n ; $j++ ) {
if ( $i >= $j){
echo '*';
}
else {
echo $j;

}

}
echo '<br>';
}




?>
