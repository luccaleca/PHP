<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em php</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $num = 010;
        echo "O valor da variaável é $num";

        $v = 300;
        var_dump($v);  //mostra o tipo da variavel

        $v1 = (float) "950";  //coerção
        var_dump($v1); 

        $array = [6, 2, 9, 3, 5];
        var_dump($array); //vai mostrar o tipo de cada elemento do array

        class Pessoa {
            private string $nome;
        }

        $p = new Pessoa;
        var_dump($p);
        ?>
</body>
</html>