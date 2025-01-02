<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="styles.css">
    <script> 
        function atualizacaoPorcentagem(value) {
            document.getElementById('porcentagem').textContent = value + '%'

        }
    </script>
</head>
<body>

<main>
<h1>Reajustador de Preços</h1>
<form method="get"action="" onsubmit="return validarFormulario();">
    <label for="preco">Preço do produto</label>
    <input type="number" id="preco" name="preco" required>

    <label for="porcentagem">Qual será o percentual de reajuste? <strong id="porcentagem">(50%)</strong> </label>
    <input type="range" id="porcentagem" name="porcentagem" min="0" max="100" value="50" 
    oninput="atualizacaoPorcentagem(this.value)">


    <button type="submit" name="reajustar">Reajustar?</button>
    
</form>
</main>


<?php 
    if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["reajustar"])) {
        //captura o valor do formulario
        $preco = floatval($_GET['preco'] ?? '');
        $porcentagem = intval($_GET['porcentagem'] ?? '');
        $precoReajustado = $preco + ( $preco * ($porcentagem/100));

        

    


     // Exibe a seção de resultados
     echo '<section>';
     echo '<h2>Resultado do Reajuste</h2>';
     echo "<p>O produto que custava " . number_format($preco, 2, ',', '.') . " com <strong>$porcentagem% de aumento</strong>
     vai passar a custar R$" . number_format($precoReajustado, 2, ',', '.') . " a partir de agora.</p>";
     echo '</section>';
 }
?>   

</body>
</html>