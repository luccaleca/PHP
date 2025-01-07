<?php 

class Mensagem {

    //atributos
    private $texto = 'mensagem de teste';
    public $css;

    //métodos

    
    public function renderizar(): string {

     return $this ->texto = $this->filtrar('mensagem de texto');
    }

    private function filtrar(string $mensagem): string {



        return filter_var($mensagem, FILTER_DEFAULT);
    }

}

        



?>