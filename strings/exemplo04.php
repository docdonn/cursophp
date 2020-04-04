<?php 
$frase = "A repetição é mãe da retenção.";
$q= strpos($frase, "mãe");
$texto = substr($frase, 0,$q);
//echo $texto;
//echo $q;

$palavra = "mãe";
var_dump($texto);
echo "<br>";
$texto2 = substr($frase, $q+strlen($palavra),strlen($frase));
var_dump($texto2);



 ?>