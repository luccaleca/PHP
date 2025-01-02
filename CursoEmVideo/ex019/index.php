<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando a sua idade</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function validarFormulario() {
            const anoNasceu = parseInt(document.getElementById('anonasceu').value);
            const anoIdade = parseInt(document.getElementById('anoidade').value);

            if(anoIdade < anoNasceu) {
                alert("O ano desejado deve ser maior que o ano de nascimento");
                return false; //impede o envio do formulario
            }
            return true; //permite o envio do formulario para o servidor php
        }
    </script>
</head>
<body>

<main>
<h1>Calculando a sua idade</h1>
<form method="get"action="" onsubmit="return validarFormulario();">
    <label for="numero">Em que ano você nasceu?</label>
    <input type="number" id="anonasceu" name="anonasceu"  max="<?php echo date('Y'); ?>"required>

    <label for="numero">Quer saber sua idade em que ano? (atualmente estamos em <?php echo date('Y');?>) </label>
    <input type="number" id="anoidade" name="anoidade">


    <button type="submit" name="calcular">Qual será minha idade?</button>
    
</form>

</main>




<?php 
    if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["calcular"])) {
        //captura o valor do formulario
        $anoNasceu = intval($_GET['anonasceu'] ?? '');
        
        if(empty($_GET['anoidade'])) {
            $anoIdade = date('Y');
        } else {
            $anoIdade = intval($_GET['anoidade']);
        }
        
        
        $idadePrevista = $anoIdade - $anoNasceu;

        

    


     // Exibe a seção de resultados
     echo '<section>';
     echo '<h2>Resultados</h2>';
     echo "<p>Quem nasceu em $anoNasceu vai ter $idadePrevista anos em $anoIdade.</p>";
     echo '</section>';
 }
?>   

</body>
</html>