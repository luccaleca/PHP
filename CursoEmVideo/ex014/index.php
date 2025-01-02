<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>

<?php 
    // Capturando os dados do Formulário Retroalimentado
    $dividendo = $_GET['d1'] ?? 0;
    $divisor = $_GET['d2'] ?? 1; // Evita divisão por zero
    ?>

    <main>
        <h1>Valores da Divisão</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="d1">Dividendo</label>
            <input type="number" name="d1" id="d1" value="<?=$dividendo?>">
            <label for="v2">Divisor</label>
            <input type="number" name="d2" id="d2" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
    </main>

    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php 
        if ($divisor != 0) { // Verifica se o divisor não é zero
            $resultado = $dividendo / $divisor;
            $resto = $dividendo % $divisor;

            
            echo "<table>";
        ?>

        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultado?></td>
            </tr>
        </table>
        
            
            </div>
        </div>
        <?php 
        } else {
            echo "<p>Por favor, insira um divisor diferente de zero.</p>";
        }
        ?>  
    </section>
</body>
</html>