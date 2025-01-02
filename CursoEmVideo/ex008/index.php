<?php 

//Operações aritméticas

//valor absoluto
 $r = abs(500);
 

 // base convert
 $s = base_convert(254, 10, 8); //binario

//funções de arredondamento
//ceil pra cima
//floor pra baixo
// round normal
//hypot é hipotenusa
//intdiv() é pra divisao inteira
//min e max - pega o maior valor ou menor
//pi() é uma função que pega o valor de pi
//pow() função de potencia (da diferença entre esse e usar ** é que nesse vc perde a ordem de prescedencia)
//sin(), cos(), tan()
//sqrt() é função de raiz quadrada


 $t= intdiv (5, 2);


 echo "A resposta é $r" .PHP_EOL . "A resposta é $s" .PHP_EOL . "A resposta é $t";

?>