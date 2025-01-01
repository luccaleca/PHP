<?php 


function saudacao(): string {

    date_default_timezone_set('America/Sao_Paulo');

     $hora = date('H');
    

    if ($hora >= 0 && $hora <= 5) {
        $saudacao = 'boa madrugada';
    } else if ($hora >= 6 && $hora <= 12) {
        $saudacao = 'bom dia';
    } else if ($hora > 12 && $hora <= 18) {
        $saudacao = 'boa tarde';
    } else {
        $saudacao = 'boa noite';
    }
    return $saudacao;
}

function resumirTexto(string $texto, int $limite, string $continue = '...') {



    $textoLimpo = trim($texto);
    if(mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }


    $resumirTexto = mb_substr($textoLimpo, 0, mb_strpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto.$continue;
};