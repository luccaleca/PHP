<?php 


function saudacao(): string {

    

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
/**
 * Conta o tempo decorrido de uma data
 * @param string $data
 * @return string
 */
function contarTempo(string $data) {
    // Obtém o timestamp atual
    $agora = strtotime(date('Y-m-d H:i:s'));
    
    // Converte a string de data passada para um timestamp
    $tempo = strtotime($data);
    
    // Calcula a diferença em segundos entre a data atual e a data fornecida
    $diferenca = $agora - $tempo;
    
    // Armazena a diferença em segundos
    $segundos = $diferenca;
    
    // Converte a diferença para minutos (aproximado)
    $minutos = round($diferenca / 60);
    
    // Converte a diferença para horas (aproximado)
    $horas = round($diferenca / 3600);
    
    // Converte a diferença para dias (aproximado)
    $dias = round($diferenca / 86400);

    // Converte a diferença para semanas (aproximado)
    $semanas = round($diferenca / 604800);

    // Converte a diferença para meses (aproximado)
    $meses = round($diferenca / 2419200);

    // Converte a diferença para anos (aproximado)
    $anos = round($diferenca / 29030400);

    if($segundos <= 60) {
        return 'agora';
    } elseif($minutos <= 60) {
        return $minutos == 1 ? 'há 1 minuto' : 'há ' . $minutos . ' minutos';
    } elseif ($horas <= 24) {
        return $horas == 1 ? 'há 1 hora' : 'há' . $horas . ' horas';
    } elseif ($dias <= 7) {
        return $dias == 1 ?  'ontem' : 'há ' . $dias . ' dias';
    } elseif ($semanas <= 4) {
        return $semanas == 1 ?  'há 1 semana' : 'há' . $semanas . ' semanas';
    } elseif ($meses <= 12) {
        return $meses == 1 ?  'há 1 mes' : 'há' . $meses . ' meses';
    } else  {
         $anos == 1 ?  'há 1 ano' : 'há' . $anos . ' anos';
    }
    
}

function validarEmail(string $email): bool {


    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validarUrlComFiltro(string $url): bool {

    return filter_var($url, FILTER_VALIDATE_URL);
}

function validarUrl (string $url): bool {
    if(mb_strlen($url) < 10)
        return false;
    // Verifica a presença de um ponto na URL
    if (strpos($url, '.') === false) {
        return false;
    }
    if(strpos($url, 'http://') or strpos($url, 'https://'))
        return true;
    return false; // Adicione um retorno falso no final para cobrir todos os casos
}









?>
