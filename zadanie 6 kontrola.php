<?php

echo 'deklaruje liczbe n. wynosi ona 5 <br>';

for ($n = 5; $n >= 1;  $n--) {

if ($n%2 ==0 ){
    echo 'liczba ' .$n .'jest podzielna przez 2 <br>';
}
else {

echo 'liczba ' .$n .'jest niepodzielna przez 2  <br>';

}


}


echo 'teraz petla while deklaruje liczbe n. wynosi ona 5 <br>';
$n = 5;
while ($n >= 1) {

while ($n%2 ==0){
echo 'liczba ' .$n .'jest podzielna przez 2 <br>';
$n = $n - 1;
}

while ($n%2 !==0){
echo 'liczba ' .$n .'jest niepodzielna przez 2 <br>';
$n = $n - 1;
}
}


?>
