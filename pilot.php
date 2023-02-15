<?php



function remote(string $button, int &$current): bool {

//echo $current;

if($button == 'up' & $current <35 )
{
    echo 'podglaszamy &nbsp';
$current = $current +1;
echo 'po zwiekszeniu' .$current;
$zwrot = 'true';

}
elseif ($button == 'down' & $current >0 ){

    echo 'sciszamy &nbsp';
$current = $current -1;
echo $current; 
$zwrot = 'true';
}

elseif ( $current >= 35){
echo ' za glosno';
$zwrot = 'false';

}

elseif ($current = 0)
{
    echo 'glosnosc zero';
    $zwrot = 'false';
}

return ($zwrot);


}

static $currentVolume=30;
$current = &$currentVolume;
// przycisk na piloci button dwie wartosci up lub down 
$button = 'up';
remote($button, $current);
//podglaszamy do 31

remote($button, $current);
//podglaszamy do 32

remote($button, $current);
//podglaszamy do 33
remote($button, $current);
//podglaszamy do 34
remote($button, $current);
//podglaszamy do 35
echo '<br>';
remote($button, $current);
//podglaszamy ale nie zwiekszy na volume bo kryterium jest nie spelnione
echo '<br>';
remote($button, $current);
echo '<br>';

remote($button, $current);
remote($button, $current);
remote($button, $current);
echo ' teraz lecimy w dol &nbsp <br>';
$button = 'down';
remote($button, $current);
remote($button, $current);
remote($button, $current);












