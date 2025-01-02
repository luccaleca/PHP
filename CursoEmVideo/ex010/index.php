<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra numero antecessor e sucessor</title>
</head>
<body>


    <h1>Mostra número antecessor e sucessor</h1>
    <form method="post" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        //verifica se o formulario foi enviado e se for obtem o valor do input
        
        $numero = intval($_POST['numero']);
        
        //calculo do sucessor e antecessor
        $antecessor = $numero - 1;
        $sucessor = $numero + 1;
        
        //exibição dos resultados
        echo "<h2>Resultados</h2>";
        echo "<p> O antecessor  é $antecessor.</p>";
        echo "<p> O sucessor  é $sucessor.</p>";
        
    }
    ?>
    
</body>
</html>