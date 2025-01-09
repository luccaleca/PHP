<?php 

namespace sistema\Nucleo;

class Exemplo {
    private $mensagem; //atributo

    public function __toString()
    {
        return $this->mensagem;
    }
    public function definirMensagem($msg) {
        $this->mensagem = $msg;
        return $this;
    }

    public function exibirMensagem() {
        echo $this->mensagem;
        return $this;
    }
}




?>