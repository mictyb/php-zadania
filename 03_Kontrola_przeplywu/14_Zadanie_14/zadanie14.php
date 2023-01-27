<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 14</title>
</head>
<body>
<!--Poniżej wpisz kod PHP-->
<?php
$n = 3;
for ($i = 1; $i<= $n; $i++){

for ($j = 1; $j <= $n; $j++) {
$results = $i * $j;
echo $i;
echo 'x';
echo $j;
echo '=';
echo $results;
echo ' ';

}
echo '<br>';
}
?>


<!--Powyżej wpisz kod PHP-->
</body>
</html>