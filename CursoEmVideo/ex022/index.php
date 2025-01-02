<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

<main>
<h1>Caixa Eletrônico</h1>
<form method="get"action="">
    <label for="valor">Qual valor você deseja sacar? (R$)</label>
    <input type="number" id="valor" name="valor" step="5" min="0" required>

    <label for="sacar" style="font-size: 1em;">Notas disponíveis: R$100, R$50, R$10, R$5</label>
    <button type="submit" name="sacar">Sacar</button>
    
</form>
</main>


<?php 
    if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["sacar"])) {
        //captura o valor do formulario
        $dinheiroSacado = intval($_GET['valor'] ?? 0);

        //constantes para os calculos
        $notas100 = intdiv($dinheiroSacado, 100);
        $restante = $dinheiroSacado % 100;

        $notas50 = intdiv($restante, 50);
        $restante = $dinheiroSacado % 50;

        $notas10 = intdiv($restante, 10);
        $restante = $dinheiroSacado % 10;

        $notas5 = intdiv($restante, 5);
        

     // Exibe a seção de resultados
     echo '<section>';
        echo "<h2>Saque de R$" . number_format($dinheiroSacado, 2, ',', '.') . " realizado</h2>";
        echo "<p>O caixa eletrônico vai te entregar as seguintes notas:";
    echo "<ul>";
        echo "<li><img src='images/100-reais.jpg' alt='R$100'> x$notas100</li>";
        echo "<li><img src='images/50-reais.jpg' alt='R$50'> x$notas50 </li>";
        echo "<li><img src='images/10-reais.jpg' alt='R$10'> x$notas10</li>";
        echo "<li><img src='images/5-reais.jpg' alt='R$5'> x$notas5</li>";
    echo "</ul>";
     echo '</section>';
 }
?>   

</body>
</html>