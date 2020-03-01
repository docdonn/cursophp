<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$stmt= $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");
$login = "fischer2";
$password= "P@ssw0rd";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();
var_dump($stmt);
echo "<br/>";
echo "Login inserido com sucesso!";


?>
