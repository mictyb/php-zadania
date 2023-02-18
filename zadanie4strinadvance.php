
<?php

function fillWithDots(array $array): void{

for($i=0; $i<5; $i++){

$length[$i] = strlen($array[$i]);

}

echo 'maksymalna ilosc liter w wyrazie  to ' .max($length); 
echo 'wypisujemy ' .'<br>';

for($i=0; $i<5; $i++){
echo '<pre>';
echo $array[$i];
$n = max($length) - $length[$i];
for ($j=0; $j< $n; $j++){
echo '*';

}
echo '<br>';
echo '</pre>';



}


}











$wordArray = ['white', 'snow', 'is', 'falling', 'wow'];
fillWithDots($wordArray);
