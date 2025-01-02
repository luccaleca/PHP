<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moeda: Real para Dólar</title>
</head>
<body>

<h1>Conversor de Moeda: Real para Dólar</h1>
<form method="post"action="">
    <label for="valor">Valor em reais (R$):</label>
    <input type="number" id="valor" name="valor" step="0.01" required>
    <button type="submit" name="converter">Converter</button>
</form>

<?php 
    
        $dataHoje = date("m-d-Y");
        //url da api do dolar  //nessas urls, sempre colocar entre aspas simples e toda vez que tiver aspas simples dentro colocar uma \ logo apos a '
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=\'' . $dataHoje . '\'&$top=100&$format=json&$select=cotacaoCompra';

        $dados =  json_decode(file_get_contents($url), true);

        //se dados nao voltar vazio
        if (isset($dados["value"][0]["cotacaoCompra"])) {
         $cotacao = $dados["value"][0]["cotacaoCompra"];

        //Agora é necessario capturar o valor do usuario
        if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['converter'])) {

            $valorEmReais = floatval($_POST['valor']); //o valor vem em string, ele converte para float

            $valorEmDolares = $valorEmReais / $cotacao;

            //formatação de moedas com internacionalização
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            //exibe o resultado da conversão
            echo "<h2>Resultado da Conversão:</h2>";
            echo "Seus  " . numfmt_format_currency($padrao, $valorEmReais,"BRL" ) . " equivalem a " .  numfmt_format_currency($padrao, $valorEmDolares , "USD");
        }
        } else {
            echo "<p>Não foi possível fazer a conversão. Tente novamente mais tarde.</p>";
        }
    
        
    ?>
    
</body>
</html>