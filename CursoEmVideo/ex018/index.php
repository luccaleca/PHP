<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritmeticas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<main>
<h1>Médias Aritméticas</h1>
<form method="get"action="">
    <label for="numero">1º Valor</label>
    <input type="number" id="numero1" name="numero1" required>

    <label for="numero">1º Peso</label>
    <input type="number" id="peso1" name="peso1" required>

    <label for="numero">2º Valor</label>
    <input type="number" id="numero2" name="numero2" required>

    <label for="numero">2º Peso</label>
    <input type="number" id="peso2" name="peso2" required>

    <button type="submit" name="calcular">Calcular Médias</button>
    
</form>

</main>

<section>

<h2>Resultados</h2>
<?php 
    if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["calcular"])) {
        //captura o valor do formulario
        $numero1 = $_GET['numero1'] ?? '';
        $numero2 = $_GET['numero2'] ?? '';

        $peso1 = $_GET['peso1'];
        $peso2 = $_GET['peso2'];
    
    //se o input for numérico
    if (is_numeric($numero1) && is_numeric($numero2) && is_numeric($peso1) && is_numeric($peso2)) {
    //converte para ponto flutuante
    $numeroReal1 = floatval($numero1);
    $numeroReal2 = floatval($numero2);

    $pesoReal1 = floatval($peso1);
    $pesoReal2 = floatval($peso2);

    $mediaAritmeticaSimples = ($numeroReal1 + $numeroReal2)/ 2;
    $mediaAritmeticaPonderada = (($numeroReal1 * $pesoReal1) + ($numeroReal2 * $pesoReal2)) / ($pesoReal1 + $pesoReal2);
    

    //exibe os resultados
    // Exibe os resultados
echo "Analisando os valores $numero1 e $numero2:";
echo "<ul>"; 
echo "<li>A <strong>Média Aritméticas Simples</strong> entre os valores é igual " . number_format($mediaAritmeticaSimples, 2, ',', '.') . "</li>";
echo "<li>A <strong>Média Aritméticas Ponderada</strong> com pesos $pesoReal1 e $pesoReal2 é igual a" . number_format($mediaAritmeticaPonderada, 2, ',', '.') . "</li>";  
echo "</ul>";
    
    
    
        
    

    }
    }



?>
</section>    

</body>
</html>