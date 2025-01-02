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

    /**
     * 
     * @param string $texto para resumir
     * @param int $limite quantidade de caracteres
     * @param string $continue opcional - o que deve ser exibido ao final do resumo
     * @return string texto resumido
     * */  

function resumirTexto(string $texto, int $limite, string $continue = '...') {



    $textoLimpo = trim(strip_tags($texto));
    if(mb_strlen($textoLimpo) <= $limite) {
        return $textoLimpo;
    }


    $resumirTexto = mb_substr($textoLimpo, 0, mb_strpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto.$continue;



    
};

function formatarValor(float $valor): string {

    return number_format($valor,2, ',', '.'); 
};

function formatarNumero(string $numero = null): string{

    return number_format($numero ?: 0,0,'.', '.');
}
