<?php 

function __autoload($nomeClasse){
	require_once("$nomeClasse.php");
	echo "<br/>";
	var_dump($nomeClasse);
	echo "<br/>";




}

$carro = new Delrey();
$carro->acelerar(80);







 ?>