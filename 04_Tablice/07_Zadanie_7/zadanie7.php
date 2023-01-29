
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
19 => mt_rand(0, 20),
20 => mt_rand(0, 20),
21 => mt_rand(0, 20),
22 => mt_rand(0, 20),
23 => mt_rand(0, 20),
24 => mt_rand(0, 20),
25 => mt_rand(0, 20),
26 => mt_rand(0, 20),
27 => mt_rand(0, 20),
28 => mt_rand(0, 20),
29 => mt_rand(0, 20),
30 => mt_rand(0, 20),
31 => mt_rand(0, 20),
32 => mt_rand(0, 20),
33 => mt_rand(0, 20),
34 => mt_rand(0, 20),
35 => mt_rand(0, 20),
36 => mt_rand(0, 20),
37 => mt_rand(0, 20),
38 => mt_rand(0, 20),
39 => mt_rand(0, 20),
40 => mt_rand(0, 20),
41 => mt_rand(0, 20),
42 => mt_rand(0, 20),
43 => mt_rand(0, 20),
44 => mt_rand(0, 20),
45 => mt_rand(0, 20),
46 => mt_rand(0, 20),
47 => mt_rand(0, 20),
48 => mt_rand(0, 20),
49 => mt_rand(0, 20),
50 => mt_rand(0, 20),

51 => mt_rand(0, 20),
52 => mt_rand(0, 20),
53 => mt_rand(0, 20),
54 => mt_rand(0, 20),
55 => mt_rand(0, 20),
56 => mt_rand(0, 20),
57 => mt_rand(0, 20),
58 => mt_rand(0, 20),
59 => mt_rand(0, 20),
60 => mt_rand(0, 20),
61 => mt_rand(0, 20),
62 => mt_rand(0, 20),
63 => mt_rand(0, 20),
64 => mt_rand(0, 20),
65 => mt_rand(0, 20),
66 => mt_rand(0, 20),
67 => mt_rand(0, 20),
68 => mt_rand(0, 20),
69 => mt_rand(0, 20),
70 => mt_rand(0, 20),
71 => mt_rand(0, 20),
72 => mt_rand(0, 20),
73 => mt_rand(0, 20),
74 => mt_rand(0, 20),
75 => mt_rand(0, 20),
76 => mt_rand(0, 20),
77 => mt_rand(0, 20),
78 => mt_rand(0, 20),
79 => mt_rand(0, 20),
80 => mt_rand(0, 20),
81 => mt_rand(0, 20),
82 => mt_rand(0, 20),
83 => mt_rand(0, 20),
84 => mt_rand(0, 20),
85 => mt_rand(0, 20),
86 => mt_rand(0, 20),
87 => mt_rand(0, 20),
88 => mt_rand(0, 20),
89 => mt_rand(0, 20),
90 => mt_rand(0, 20),
91 => mt_rand(0, 20),
92 => mt_rand(0, 20),
93 => mt_rand(0, 20),
94 => mt_rand(0, 20),
95 => mt_rand(0, 20),
96 => mt_rand(0, 20),
97 => mt_rand(0, 20),
98 => mt_rand(0, 20),
99 => mt_rand(0, 20),
100 => mt_rand(0, 20)




];
 mt_rand(0, 20);



?>
<div class="numberlist">  losowe liczby  
<?php
$sum = 0;
echo '<br>';
for ($i = 0; $i <= 99; $i++){

echo $radnumbers[$i];
echo ',';
$sum = $sum + $radnumbers[$i];
}
echo '<br>';
?>
</div>
<div class="result"> suma losowych liczb z zakresu 0 -100 wynosi = 
<?php
echo $sum;
?>
</div>


<!--Powyżej wpisz kod PHP-->
</body>
</html>



