
<?PHP

$x =16;
$y = 15;
$x_y = $x < $y;
$t = true;
$f = false;
$t_f = $t OR $f;
$last = $x_y AND $t_f;
echo var_dump($last);
?>