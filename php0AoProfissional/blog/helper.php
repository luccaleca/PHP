<?php 


function saudacao(): string {

    

     $hora = date('H');
    
    /*
    if ($hora >= 0 && $hora <= 5) {
        $saudacao = 'Boa madrugada.';
    } else if ($hora >= 6 && $hora <= 12) {
        $saudacao = 'Bom dia.';
    } else if ($hora > 12 && $hora <= 18) {
        $saudacao = 'Boa tarde.';
    } else {
        $saudacao = 'Boa noite.';
    }
    */

    switch ($hora) {
        case $hora >= 0 and $hora <= 5;
        $saudacao = 'Boa madrugada.';
        break;
        case $hora >= 6 and $hora < 12;
        $saudacao = 'Bom dia.';
        break;
        case $hora >= 12 and $hora < 18;
        $saudacao = 'Boa madrugada.';
        break;
        default:  $saudacao = 'Boa noite.';
    }

    //match so foi introduzido no php 8

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


function localhost() {

    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

    if($servidor == 'localhost') {
        return true;
    }
    return false;
}

function str_comeca_com($haystack, $needle) {
    // Verifica se o comprimento do needle é maior que o haystack
    if (strlen($needle) > strlen($haystack)) {
        return false;
    }
    // Usa substr para extrair o início do haystack e compara com o needle
    return substr($haystack, 0, strlen($needle)) === $needle;
}

function url(string $url): string {

    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO); //verifica se é ambiente de produção pelo termo localhost

    if(str_comeca_com($url, '/')) {
    return $ambiente.$url;
    }
    return $ambiente . '/' .$url;
}

function dataAtual ():string {

    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('n') - 1;
    $ano = date('Y');

    $nomesDiasDaSemana = ['domingo','segunda-feira','terca-feira','quarta-feira','quinta-feira','sexta-feira','sabado'];
    $nomesDosMeses = ['janeiro', 'fevereiro', 'março', 'abril', 'maio','junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];

    $dataFormatada = $nomesDiasDaSemana[$diaSemana] . ', ' . $diaMes .  ' de ' . $nomesDosMeses[$mes] . ' de ' . $ano;

    return $dataFormatada;
}

//A função slug transofrma uma string em um formato que pode ser usado em uma url, função URL amigável
function slug( string $texto ): string {  

    //substitui caracteres nao são numeros ou letras por hifens
    $texto = preg_replace('~[^\pL\d]+~u', '-', $texto);

    // Translitera para ASCII. Entao caracteres que tem ascento por exemplo, transformam-se para um caractere mais proximo (é por e, por exemplo)
    $texto = iconv('utf-8', 'us-ascii//TRANSLIT', $texto);

    // Remove qualquer caractere que nao seja: letra, numero ou -
    $texto = preg_replace('~[^-\w]+~', '', $texto);

    // Remove hífens duplicados
    $texto = preg_replace('~-+~', '-', $texto);

    // Remove hífens das extremidades
    $texto = trim($texto, '-');

    // Converte para minúsculas
    $texto = strtolower($texto);

    if(empty($texto)) {
        return 'sem texto';
    }

    return $texto;


}





?>
