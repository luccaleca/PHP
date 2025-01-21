<template>
  <div>
    <h1>Entendendo a diretiva V-On</h1>
    <!-- Remova os parênteses aqui para não invocar imediatamente -->
    <input type="text" v-on:keyup="imprimirTexto('Enviando parâmetro', 5, xyz)" />
    <button v-on:click="mensagemAlerta($event, 'texto', 100)">Botão</button>
  </div>
</template>

<script>
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'DiretivaVOn',
  setup() {


    const imprimirTexto = (t, n, x) => {
      console.log(t)
      console.log(n)
      console.log(x)
    }

    const mensagemAlerta = (evento, p1, p2)  => {
      alert("Mensagem de alerta")
      console.log(evento, p1, p2)
    }

    const xyz = true;


    return {
      imprimirTexto,
      mensagemAlerta,
      xyz
    }
  },
})
</script>

<style>


</style>
