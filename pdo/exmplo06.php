<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt= $conn->prepare("DELETE FROM tb_usuarios WHERE deslogin= :LOGIN AND idusuario= :ID");
$login = "rafael.fischer";
$id=3;
$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":ID", $id);

$stmt->execute();

var_dump($stmt);
echo "<br/>";
echo "<br/>";
echo "Login apagado com sucesso";


?>
