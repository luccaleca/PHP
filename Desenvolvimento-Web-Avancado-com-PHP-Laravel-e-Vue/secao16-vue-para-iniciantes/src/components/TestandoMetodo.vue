<template>
  <div>
    <h2>{{titulo}}</h2>
    <div> Somar:{{somar()}}</div>
    <div> Subtrair: {{subtrair()}}</div>
    <div> Multiplicar:{{multiplicar()}}</div>
    <div> Dividir:{{dividir()}}</div>
    <div> Numero aleatório:{{numeroAleatorio()}}</div>

  </div>
</template>


<script>
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name:'TestandoMetodo',
  setup() {

    const n1 = 10;
    const n2 = 5;

    const titulo = ref('Teste de métodos: ' + n1 + ' e ' + n2);

    const somar = function somar() { //convencional
      return n1 + n2;
    }

    const subtrair = function() { //anonima
      return n1 - n2;
    }

    const multiplicar = () => { //arrow function
      return n1 * n2;
    }

    const dividir = function() { // nao da pra fazer de forma mais enxuta
      return n1 / n2;
    }

    const numeroAleatorio = function() { // nao da pra fazer de forma mais enxuta
      return Math.random();
    }

    return {
      titulo,
      somar,
      subtrair,
      multiplicar,
      dividir,
      numeroAleatorio
    }
  },
})
</script>



<style scoped>

</style>
