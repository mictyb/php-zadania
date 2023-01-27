<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 3</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
echo 'z while';
echo '<br>';
$licznik = 10;
while($licznik > 0) {
echo 'lubie php';
echo '<br>';
$licznik = ($licznik - 1);
}
echo 'z while dekremantacja';
echo '<br>';
$licznik = 10;
while($licznik-- > 0) {
echo 'lubie php';
echo '<br>';
}
echo 'z for';
echo '<br>';
for ($licznik = 10; $licznik > 0; $licznik--) 
{
    echo 'lubie php';
echo '<br>';
} 
?>
<!--Powyżej wpisz kod PHP-->
</body>
</html>