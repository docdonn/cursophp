<?php 
$anoNascimento = 1983;
//Teste comentario
$nomeCompleto = "";
/*teste de variavel
*teste
*/

$nome1 = "Rafael";
echo "<br/>";
echo $nome1;
echo "<br/>";

$sobrenome = 'Fischer';
echo $sobrenome;
echo "<br/>";

$nomeCompleto = $nome1 . " ".$sobrenome;

echo $nomeCompleto;
exit;

unset($nome1);


if (isset($nome1))
{
echo $nome1;
};




 ?>