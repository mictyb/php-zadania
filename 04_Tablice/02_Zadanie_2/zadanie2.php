<?php


$fruits = [

0 => 'jablko',
1 => 'banan',
2 => 'kiwi',
3 => 'pomarancza'
];
echo 'pierwszy owoc to ' .$fruits[0];
$ostatni = (count($fruits) - 1);
echo '<br>';
echo 'ostatni owoc to  '  .$fruits[$ostatni];
echo '<br>';
for ($i = 0; $i <= $ostatni; $i++)
{
echo $fruits[$i];
echo '<br>';
}

?>
