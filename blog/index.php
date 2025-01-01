<?php 
//Arquivo index resposanvel pela inicialização do sistema

require_once 'sistema/configuracao.php';
include_once 'helper.php';

echo '<h1>Arquivo index</h1>';

$texto = 'texto para resumir ';
$string = 'texto';
$int = 10;
$float = 9.99;
$bool = true;
$nulo = null;

/*
echo $total = mb_strlen(trim($texto));  //conta quantos caracteres tem a strig e o trim desconsidera os espaços
echo '<hr>';
echo $resumo = mb_substr($texto, 2, 15);  //ele conta as casas e exibe apenas as que estao no intervalo
echo '<hr>';

echo $ocorrencia = mb_strrpos($texto, 'e');


var_dump($string);
echo '<hr>';
echo saudacao();
echo '<hr>';
echo resumirTexto($texto, 50);
echo '<hr>';
*/

echo resumirTexto($texto, 100, 'continue');

?>