<?php

function bookShow(array $list): void
{

//zmienna statyczna 
static $noOfShowedBooks = 0;

//dlugosc tabeli 
$length = count($list);

for($i=0; $i< $length; $i++){

echo $list[$i] .'&nbsp' .'<br>';
$noOfShowedBooks = $noOfShowedBooks + 1;

}

echo 'W tym obiegu wyświetlono &nbsp' .$length .'&nbsp książek <br>, Łącznie wyświetlono &nbsp' .$noOfShowedBooks .' &nbsp książek <br>';


}
$list = ['tytu1', 'tytul2', 'tytul3'];
echo bookShow($list);
echo bookShow($list);
echo bookShow($list);


//echo $list[0];


/*
function staticCount(): void
{
    static $counter = 0;
    echo $counter;
    $counter = $counter + 1;
    echo '<br>';
}
staticCount();
staticCount();
staticCount();*/


?>
