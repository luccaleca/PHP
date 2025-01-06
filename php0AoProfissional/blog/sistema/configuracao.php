<?php 
//arquivo de configuração do sistema

//define o fuso horario
date_default_timezone_set('America/Sao_Paulo');

//informações do sistema
//define('SITE_NOME', 'UnSet');
define('SITE_DESCRICAO', 'UnSet - Tecnologia em Sistemas');

//É possivel usar os dois jeitos para definir constantes: define ou 
//Não pode usar const em if else mas pode usar define
define('URL_PRODUCAO', 'http://unset.com.br');
define('URL_DESENVOLVIMENTO', 'http://localhost/blog');

const SITE_NOME = 'UnSet';
?>