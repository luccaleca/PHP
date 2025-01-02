<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes de um numero</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<main>
<h1>Informe um número</h1>
<form method="get"action="">
    <label for="numero">Número</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit" name="calcular">Calcular Raízes</button>
    
</form>

</main>

<section>

<h2>Resultados</h2>
<?php 
    if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["calcular"])) {
        //captura o valor do formulario
        $numero = $_GET['numero'];

    
    //se o input for numérico
    if (is_numeric($numero)) {
    //converte para ponto flutuante
    $numeroReal = floatval($numero);

    $resultadoAoQuadrado = sqrt($numero);
    $resultadoAoCubo = ($resultadoAoQuadrado * 1/2);
    
    

    //exibe os resultados
    // Exibe os resultados
echo "Analisando o <strong>número $numero</strong>, temos:";
echo "<ul>"; 
echo "<li> A sua raiz quadrada é " . number_format($resultadoAoQuadrado, 2, ',', '.') . "</li>";
echo "<li> A sua raiz cúbica é " . number_format($resultadoAoCubo, 2, ',', '.') . "</li>";  
echo "</ul>";
    
    
    
        
    

    }
    }



?>
</section>    

</body>
</html>