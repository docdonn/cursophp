<?php 

    $servidor = "127.0.0.1";
    $instancia = "FISCHER-PC";
    $porta = 1433;
    $database = "dbphp7";
    $usuario = "php7";
    $senha = "root";
    
    //$conn = new PDO( "sqlsrv:Server={$servidor}\\{$instancia},{$porta};Database={$database}", $usuario, $senha );
    
    $conn = new PDO( "sqlsrv:Server={$servidor},{$porta};Database={$database}", $usuario, $senha );

$stmt= $conn->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario");

$stmt -> execute();
$results = $stmt -> fetchAll(PDO::FETCH_ASSOC);

//var_dump($results);


foreach ($results as $row) {

	foreach ($row as $key => $value) {

		echo "<strong>".$key.":</strong>" .$value."<br/>";
		# code...
	}
	
	echo "===========================================================================<br/>";
}

 ?>