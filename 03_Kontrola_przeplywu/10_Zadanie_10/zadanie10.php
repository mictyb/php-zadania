<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 10</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
//definicja zmiennej z ilością rzędów i gwiazdek w wierszu
$n = 5;
echo 'n = 5';
echo '<br>';

//z for 
for ( $wiersz = 1; $wiersz <= $n; $wiersz++ ){
for ( $kolumna = 1; $kolumna <= $n; $kolumna++ ){
if($kolumna <= $wiersz) {
echo '*';
}
else {
echo ' ';
}
}
echo '<br>';
}
<!--Powyżej wpisz kod PHP-->
</body>
</html>