<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
$nome = "Gustavo";
echo "Olá $nome!";

$sobrenome = "Guanabara";
echo "$nome $sobrenome \u{1F596}";  //aqui ele vai retornar o emote desse codigo aspas duplas
echo '$nome $sobrenome \u{1F596}';  //aqui ele vai retornar o texto literal aspa simples

const ESTADO = "SP";
echo "Eu adoro ESTADO"; //retorna ESTADO
echo 'Eu adoro ESTADO'; //retorna ESTADO
echo "Eu adoro" .ESTADO; //retorna SP

$carboidrato = "arroz";
$proteina = "carne";
$gordura = "azeite";
echo "$carboidrato \n \"$proteina\" \n $gordura"; // quebra de linha  \

//sintexe heredoc
echo <<< FRASE
 Nesse intervalo de frase
 vc pode escrever o o que vc quiser
e o formato ele tambem vai copiar
FRASE;
?>
    
</body>
</html>