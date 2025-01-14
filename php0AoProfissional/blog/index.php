
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


<?php
//Arquivo index resposanvel pela inicialização do sistema



require_once 'sistema/configuracao.php';
include_once 'sistema/Nucleo/Helper.php';
include './sistema/Nucleo/Mensagem.php';
include './sistema/Nucleo/Exemplo.php';
include './sistema/Nucleo/Controlador.php';







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

echo \sistema\Nucleo\Helper::resumirTexto($texto, 100, 'continue');
echo "<hr>";


$idade = 20;

$mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";

echo $mensagem;

echo "<hr>";

echo \sistema\Nucleo\Helper::formatarValor(50000000);
echo "<hr>";

echo \sistema\Nucleo\Helper::formatarNumero(10000);

echo "<hr>";

echo \sistema\Nucleo\Helper::contarTempo('2024-01-01 15:16:15');

$url = 'https://unset.';

var_dump(\sistema\Nucleo\Helper::validarUrl ($url));
echo '<hr>';
var_dump(\sistema\Nucleo\Helper::validarUrlComFiltro($url));


echo '<hr>';
echo SITE_NOME;

echo '<hr>';

var_dump($_SERVER);
echo '<hr>';
var_dump(\sistema\Nucleo\Helper::localhost());
echo '<hr>';


echo \sistema\Nucleo\Helper::url('/teste');
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
echo  \sistema\Nucleo\Helper::saudacao() .' Hoje é ' . \sistema\Nucleo\Helper::dataAtual();
echo '<hr>';

echo \sistema\Nucleo\Helper::slug('Esse texto é uma string pensanda em se tornar uma url. A idéia é essa.');

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

if (\sistema\Nucleo\Helper::validadorDeCpf($cpf)) {
    echo "CPF é válido";
} else {
    echo "CPF é inválido";
}
echo '<hr>';

use sistema\Nucleo\Mensagem;
echo (new \sistema\Nucleo\Mensagem)-> sucesso('Mensagem de sucesso')->renderizar();
echo '<br>';
echo (new \sistema\Nucleo\Mensagem)->  erro('Mensagem de erro')->renderizar();
echo '<br>';
echo (new \sistema\Nucleo\Mensagem)-> alerta('Mensagem de alerta')->renderizar();
echo '<br>';
echo (new \sistema\Nucleo\Mensagem)->  informa('Mensagem de informações')->renderizar();
echo '<br>';
echo (new \sistema\Nucleo\Mensagem)-> informa('Outro jeito de puxar metodos')->renderizar();
echo '<br>';
echo (new \sistema\Nucleo\Mensagem) ->alerta('Não preciso mais chamar o metodo renderizar');
echo '<hr>';

use sistema\Nucleo\Exemplo;
echo (new \sistema\Nucleo\Exemplo) ->definirMensagem('Exemplo de encademaneto de metodos');
echo '<hr>';

use sistema\Nucleo\Controlador;

new \sistema\Nucleo\Controlador;
echo '<br>';
var_dump(new Controlador());

echo '<hr>';



echo \sistema\Nucleo\Helper::saudacao();


?>
