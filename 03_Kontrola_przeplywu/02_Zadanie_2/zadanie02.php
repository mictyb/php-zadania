<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 2</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->


<?PHP
$nr1 = 7;
$nr2 = 2;
$nr3 = 11;
if($nr1 > $nr2 AND $nr1 > $nr3) {
        echo 'liczba 1 to max ';
}
elseif($nr2 > $nr3)
{
echo ' najwieksza z liczb to ';
echo '<br>';
echo $nr2;
}
else 
{
echo ' najwieksza z liczb  ';
echo '<br>';
echo $nr1;
echo '<br>';
echo $nr2;
echo '<br>';
echo $nr3;
echo '<br>';
echo 'to ';
echo $nr3;
}

?>

<!--Powyżej wpisz kod PHP-->
</body>
</html>