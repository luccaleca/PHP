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
<h1>Calculadora de Tempo</h1>
<form method="get"action="">
    <label for="segundos">Qual é o total de segundos?</label>
    <input type="number" id="segundos" name="segundos" required>

    <button type="submit" name="calcular">Calcular</button>
    
</form>
</main>


<?php 
    if($_SERVER["REQUEST_METHOD"] === "GET" && isset($_GET["calcular"])) {
        //captura o valor do formulario
        $segundosDigitados = intval($_GET['segundos'] ?? 0);

        //constantes para os calculos
        $segundosPorMinuto = 60;
        $segundosPorHora = $segundosPorMinuto * 60;
        $segundosPorDia = $segundosPorHora * 24;
        $segundosPorSemana = $segundosPorDia * 7;

        //Calcular semanas
        $semanas = intdiv($segundosDigitados, $segundosPorSemana);  //executa uma divisao inteira
        $restante = $segundosDigitados % $segundosPorSemana; //restante de segundos apos obtermos as semanas

        //Calcular dias
        $dias = intdiv($segundosDigitados, $segundosPorDia);  //executa uma divisao inteira
        $restante = $segundosDigitados % $segundosPorDia; //restante de segundos apos obtermos os dias e semanas

        //Calcular horas
        $horas = intdiv($segundosDigitados, $segundosPorHora);  //executa uma divisao inteira
        $restante = $segundosDigitados % $segundosPorDia; //restante de segundos apos obtermos os dias e semanas

         //Calcular minutos
         $minutos =  intdiv($restante, $segundosPorMinuto);

         //Calcular segundos restantes
         $segundosRestantes = $restante % $segundosPorMinuto;

    


     // Exibe a seção de resultados
     echo '<section>';
        echo "<h2>Totalizando tudo</h2>";
        echo "<p>Analisando o valor que você digitou, <strong> $segundosDigitados segundos </strong> equivalem a um total de:";
        echo "<ul> 
            <li>$semanas semanas</li>
            <li>$dias dias</li>
            <li>$horas horas</li>
            <li>$minutos minutos</li>
            <li>$segundosRestantes segundos</li>
            </ul>";
     echo '</section>';
 }
?>   

</body>
</html>