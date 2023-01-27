
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prework PHP - zadanie 7</title>

    

</head>
<body>
<style>
  .numberlist {
     width: 400px;
     background-color: yellow;
  }
.result {
     width: 400px;
     background-color: red;
  }


  
</style>
<!--Poniżej wpisz kod PHP-->
<?php

//losowo wpisane
$radnumbers = [
0 => mt_rand(0, 20),
1 => mt_rand(0, 20),
2 => mt_rand(0, 20),
3 => mt_rand(0, 20),
4 => mt_rand(0, 20),
5 => mt_rand(0, 20),
6 => mt_rand(0, 20),
7 => mt_rand(0, 20),
8 => mt_rand(0, 20),
9 => mt_rand(0, 20),
10 => mt_rand(0, 20),
11 => mt_rand(0, 20),
12 => mt_rand(0, 20),
13 => mt_rand(0, 20),
14 => mt_rand(0, 20),
15 => mt_rand(0, 20),
16 => mt_rand(0, 20),
17 => mt_rand(0, 20),
18 => mt_rand(0, 20),
19 => mt_rand(0, 20)
];
 mt_rand(0, 20);



?>
<div class="numberlist">  losowe liczby  
<?php
$sum = 0;
echo '<br>';
for ($i = 0; $i <= 19; $i++){

echo $radnumbers[$i];
echo ',';
$sum = $sum + $radnumbers[$i];
}
echo '<br>';
?>
</div>
<div class="result"> suma losowych liczb z zakresu 0 -20 wynosi = 
<?php
echo $sum;
?>
</div>


<!--Powyżej wpisz kod PHP-->
</body>
</html>



