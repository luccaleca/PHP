<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Número Real</title>
</head>
<body>

<h1>Analisador de Número Real</h1>
<form method="post"action="">
    <label for="numero">Digite um número real:</label>
    <input type="text" id="numero" name="numero" required>
    <button type="submit" name="analisar">Analisar</button>
</form>

<?php 
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["analisar"])) {
        //captura o valor do formulario
        $numero = $_POST['numero'];

    //substitui . por , no para o php entender se o usuario usar virgula como separador de casas decimais
    $numero = str_replace(',', '.', $numero);
    
    //se o input for numérico
    if (is_numeric($numero)) {
    //converte para ponto flutuante
    $numeroReal = floatval($numero);


    //depois ele vai separar a parte inteira e a parte fracionaria
    $parteInteira = floor($numeroReal);
    $parteFracioanaria = $numeroReal - $parteInteira;

    //exibe os resultados
    echo "<h2>Resultados</h2>";
    echo "<p>Número Original: $numeroReal</p>";
    echo "<p>Parte Inteira: $parteInteira</p>";
    echo "<p>Parte Fracionária: " . number_format($parteFracioanaria, 2, '.', '') . "</p>";

    

    }
    }



?>
    
</body>
</html>