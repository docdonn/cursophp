<?php 

class Pessoa {

public $nome; //atributo

public function falar(){ //Método

return "O meu nome é ". $this -> nome;

}

}
	
$fischer = new Pessoa();

$fischer -> nome = "Rafael Fischer";

echo $fischer->falar();

 ?>