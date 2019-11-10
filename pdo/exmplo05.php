<?php

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");


$conn->beginTransaction();
$stmt= $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario= ?");
//$login = "rafael.fischer";
$id=2;
//$stmt->bindParam(":LOGIN", $login);
//$stmt->bindParam(":ID", $id);

$stmt->execute(array($id));

//$conn->rollBack();
$conn->commit();



var_dump($stmt);
echo "<br/>";
echo "<br/>";
echo "Login apagado com sucesso";


?>
