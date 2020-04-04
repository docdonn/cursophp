<?php 

$qualASuaIdade = 66;
$idadeCrianda = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianda) {
	echo "Criança";

}elseif($qualASuaIdade < $idadeMaior){
echo "Adolecente";


}elseif ($qualASuaIdade < $idadeMelhor){

	echo "Adulto";
}else{
echo "Idoso";
}

echo "<br>";
echo ($qualASuaIdade < $idadeMaior)? "Menor de Idade":"Maior de Idade";

 ?>