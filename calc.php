<?php
$p= $_GET['p'];
$h= $_GET['h'];
echo "При p=$p,<br>h=$h<br>";
//$z=sin($x)+acos($y)-sqrt($x*$y);
$m = $p + ($h - 7 * sin($p + 2 * $h * $h)) / (3 * $p - 4 * $h);
echo "Результат становить $m";

$exampleFile = fopen("Result.txt", "a+");
fwrite($exampleFile, "Результат при p=$p і h=$h дорівнює $m\n");
fclose($exampleFile);
?>