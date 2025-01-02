<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Número Aleatório</title>
</head>
<body>

    <h1>Gerador de Número Aleatório</h1>
    <form method="post" action="">
        <?php
        $botaoTexto = "Gerar Número";
        $numeroAleatorio = null;

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['generate'])) {
            // Gera um número aleatório entre 0 e 100
            $numeroAleatorio = rand(0, 100);
            $botaoTexto = "Gerar Outro";
        }
        ?>

        <button type="submit" name="generate"><?php echo $botaoTexto; ?></button>
    </form>

    <?php
    if ($numeroAleatorio !== null) {
        // Exibe o número gerado após o botão ser clicado
        echo "<h2>Número Gerado: $numeroAleatorio</h2>";
    }
    ?>

</body>
</html>