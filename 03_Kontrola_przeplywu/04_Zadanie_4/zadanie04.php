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
<?php

echo 'z while dekremantacja';
echo '<br>';
$licznik = 1;
while($licznik++ <=100) {
echo $licznik;
echo '<br>';
}
echo 'z for';
echo '<br>';
for ($licznik = 1; $licznik <= 100; $licznik++) 
{
    echo $licznik;
echo '<br>';
} 
?>
</body>
</html>