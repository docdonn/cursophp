<?php 
$nome = "Fischer";

function teste (){

	global $nome;
	echo $nome;
}

function teste2(){
$nome = "rafael";

echo $nome. "agora no teste2";

}

teste();
teste2();

 ?>