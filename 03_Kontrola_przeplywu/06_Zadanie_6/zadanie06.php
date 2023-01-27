<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 6</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?PHP

for ($n = 0; $n <= 5; ++$n ) 
{
   $modulo = $n % 2;
if ( $modulo == 0) {
echo 'liczba ';
echo $n;
echo 'jest parzysta';
echo '<br>';
}
else {
echo 'liczba ';
echo $n;
echo 'jest nieparzysta';
echo '<br>';
}
} 
echo 'z while';
echo '<br>';


while(--$n>0) {
    $modulo = $n % 2;
 if ( $modulo == 0) {
echo 'liczba ';
echo $n;
echo 'jest parzysta';
echo '<br>';
}
else {
echo 'liczba ';
echo $n;
echo 'jest nieparzysta';
echo '<br>';
}
 
}



?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>