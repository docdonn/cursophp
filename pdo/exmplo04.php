<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt= $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha= :PASSWORD WHERE idusuario = :ID");
$login = "rafael.fischer";
$password= "$200rr#";
$id=2;
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

var_dump($stmt);
echo "<br/>";
echo "Login e senha atualizados";


?>
