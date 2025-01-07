<?php
//Arquivo index resposanvel pela inicialização do sistema

require_once 'sistema/configuracao.php';
include_once 'helper.php';
include './sistema/Nucleo/Mensagem.php';


echo '<h1>Arquivo index</h1>';

$texto = '<h1>texto</h1> <p>para resumir</p> ';
$texto = strip_tags($texto);
echo "<hr>";


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
echo "<hr>";


$idade = 20;

$mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";

echo $mensagem;

echo "<hr>";

echo formatarValor(50000000);
echo "<hr>";

echo formatarNumero(10000);

echo "<hr>";

echo contarTempo('2024-01-01 15:16:15');

$url = 'https://unset.';

var_dump(validarUrl ($url));
echo '<hr>';
var_dump(validarUrlComFiltro($url));


echo '<hr>';
echo SITE_NOME;

echo '<hr>';

var_dump($_SERVER);
echo '<hr>';
var_dump(localhost());
echo '<hr>';


echo url('/teste');
echo '<hr>';

echo $_SERVER['HTTP_HOST'];
echo '<hr>';

$meses = [ 2 => 'Janeiro',  //mas ele sempre começa pelo 0
        'Fevereiro',
        'Março',
        'Abril'
        ];




var_dump($meses);
echo '<br>';
echo $meses[2];
echo '<br>';
foreach ($meses as $chave => $valor) {
    echo $chave . ' ';
}
echo '<br>';
echo  saudacao() .' Hoje é ' . dataAtual();
echo '<hr>';

echo slug('Esse texto é uma string pensanda em se tornar uma url. A idéia é essa.');

echo '<hr>';


$numero = 5;

while ($numero < 10) {
    echo $numero ++;
}

echo '<br>';

for ($i = 0; $i <= 10; $i++) {
    
    $paridade = ($i % 2 ? 'impar' : 'par');
    
    
    echo $i . ' x ' . $i . ' = ' . ($i * $i) . ' ' . $paridade . '<br>';
}

echo '<hr>';

echo '<h2> Validador de CPF<h2>';

$cpf = "376.219.838-17";

echo "$cpf";

echo '<br>';

if (validadorDeCpf($cpf)) {
    echo "CPF é válido";
} else {
    echo "CPF é inválido";
}
echo '<hr>';

$msg = new Mensagem();
echo $msg -> renderizar();
echo '<br>';
var_dump($msg);


?>
