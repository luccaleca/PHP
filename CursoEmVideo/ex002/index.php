<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tipos de Tag para php</h1>

    <?php
    print(htmlspecialchars("<?php ?>  ----> super tag PHP (essa é a unica que se usa)"));
?>
<br>
<?php
    print(htmlspecialchars("<? ?> -----> short open tag"));
?>
<br>
<?php
    print(htmlspecialchars("<% %> -----> ASP tag"));
?>

<?php 
    $nome="Lucca";
    echo"<p>Eu me chamo $nome!</p>";
?>

<?php 
    date_default_timezone_set("America/Sao_Paulo");
    echo "Hoje é dia " . date("d/m/Y");
    echo " e a hora atual é " . date("G:i:s");
    ?>
</body>
</html>