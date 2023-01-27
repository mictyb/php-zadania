<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 12</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?PHP
$a = 1;
$b = 2;
$c = 6;
 
 
 
//lecimy max
if ( $c > $a and $c > $b){
  $max = $c;
}
elseif( $b > $a and $b > $c)
{
$max = $b;
} 
else
$max = $a;


//lecimy min

if ( $c < $a and $c < $b){
  $min = $c;
}
elseif( $b < $a and $b < $c)
{
$min = $b;
} 
else
$min = $a;


//medium
if ( ($c < $a and $c > $b ) or ($c > $a and $c < $b) ){
  $med = $c;
}
elseif ( ($b < $a and $c < $b ) or ($b > $a and $c > $b) )
{
$med = $b;
} 
else
$med = $a;


echo 'liczby w kolejnosci rosnacej to ';
echo $min;
echo $med;
echo $max;

?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>