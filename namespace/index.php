<?php

require_once("config.php");


$cad = new Cadastro();
$cad->setNome("Rafael Augusto Fischer");
$cad->setEmail("doc.donn@edusoft.com.br");
$cad->setSenha("123456");


echo $cad;

?>
