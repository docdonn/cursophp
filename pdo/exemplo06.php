<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

$conn->beginTransaction();

//$stmt= $conn->prepare("DELETE FROM tb_usuarios WHERE deslogin= :LOGIN AND idusuario= :ID");
$stmt= $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario =?");

//$login = "rafael.fischer";
$id=2;

//$stmt->bindParam(":LOGIN", $login);
//$stmt->bindParam(":ID", $id);

$stmt->execute(array($id));
//$conn -> rollback();
$conn -> commit();
var_dump($stmt);
echo "<br/>";
echo "<br/>";
echo "Delete OK!!!";


?>
