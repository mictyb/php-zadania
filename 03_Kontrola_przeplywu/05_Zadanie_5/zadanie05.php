<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 5</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?PHP

$resultswhile = 0;
$licznik = 0;
for ($resultfor = 0; $licznik <= 10; $resultfor = $resultfor + ++$licznik ) 
{
    echo $resultfor;
echo '<br>';
} 

echo '<br>';
$licznik = 0;
while(++$licznik <=10) {
 $resultswhile = $resultswhile + $licznik;
 echo $resultswhile;
echo '<br>';
}

?>




<!--Powyżej wpisz kod PHP-->
</body>
</html>