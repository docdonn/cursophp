<?php 

$dt = new DateTime();
$periodo = new DateInterval("P15D");

echo $dt -> format("d/m/y m:i:s");

$dt->add($periodo);
echo "<br>";

echo $dt -> format("d/m/y m:i:s");







 ?>