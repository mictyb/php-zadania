<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Prework PHP - zadanie 4</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
$myNumber = 4;
$myString = "4";
$resultFirst;
$resultSecond;

// porownanie wartosci sa takie same 
$resultFirst = ($myNumber == $myString);

// wartosci sa takie same ale typy rozne bo jest intiger oraz string
$resultSecond = ($myNumber === $myString);
echo var_dump($resultFirst);
echo var_dump($resultSecond);
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>


