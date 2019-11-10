<?php

try
{

    $servidor = "127.0.0.1";
    $instancia = "FISCHER-PC";
    $porta = 1433;
    $database = "dbphp7";
    $usuario = "php7";
    $senha = "root";
    
    $conexao = new PDO( "sqlsrv:Server={$servidor}\\{$instancia},{$porta};Database={$database}", $usuario, $senha );
}
catch ( PDOException $e )
{
    echo "Drivers disponiveis: " . implode( ",", PDO::getAvailableDrivers() );
    echo "\nErro: " . $e->getMessage();
    exit;
}

$query = $conexao->prepare( "select @@version" );
$query->execute();

$resultado = $query->fetchAll();

echo $resultado['0']['0'];

unset( $conexao );
unset( $query );
