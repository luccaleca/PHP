<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Salário Mínimo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<main>
<h1>Informe seu salário</h1>
<form method="get"action="">
    <label for="numero">Salário(R$)</label>
    <input type="number" id="numero" name="numero" required>
    <p>Considerando o salário mínimo de R$ 1.412,00</p>
    <button type="submit" name="calcular">Calcular</button>
    
</form>

<?php 
    if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["calcular"])) {
        //captura o valor do formulario
        $numero = $_GET['numero'];

    
    //se o input for numérico
    if (is_numeric($numero)) {
    //converte para ponto flutuante
    $numeroReal = floatval($numero);
    $salarioMinimo = 1412.00; // Ajuste conforme o valor atual
    $salariosMinimos = floor($numeroReal/ $salarioMinimo);
    $resto = $numeroReal - ($salariosMinimos * $salarioMinimo);

    //exibe os resultados
    echo "Você ganha o equivalente a $salariosMinimos salário(s) mínimos e resta R$" . number_format($resto,2,',', '.');

    

    }
    }



?>
    
</main>
</body>
</html>