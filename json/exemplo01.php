<?php 

$pessoas = array();
array_push($pessoas, array(
	'nome'=> 'Daniel',
	'idade'=> 24



));

array_push($pessoas, array(
'nome'=> 'Rafael',
'idade'=> 35



));

print_r($pessoas[0]['nome']);

echo "<br>";

echo json_encode($pessoas);



 ?>