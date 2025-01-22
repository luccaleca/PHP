<template>
  <div>
    <h1>ModificadoresDiretivaVOn</h1>
    <a href="https://www.youtube.com/"

        @click="prevenirComportamentoPadrao">Youtube</a>
    Mensagem: {{ msg }} <br />
    <button @click.once="executarUmaVez">Botão</button>
    <p>Cliques: {{ cliques }}</p>
    <br />
    <form @submit.prevent="prevenirUmaVez">
      <button type="submit">Enviar</button>
    </form>
    <p>Formulário: {{ formulario }}</p>
    <hr>
    <input type="text" @keyup.shift.enter="capturandoTeclas($event)">
    <p>Teclas: {{ teclas }}</p>
  </div>
</template>

<script>
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name: 'ModificadoresDiretivaVOn',
  setup() {
    const msg = ref('Comportamento padrão ativado');
    const formulario = ref('');
    const cliques = ref(0);
    const teclas = ref('')

    const prevenirComportamentoPadrao = function(event) {
      event.preventDefault();
    };

    const executarUmaVez = function() {
      cliques.value++;
    };

    const prevenirUmaVez = function() {
      formulario.value = 'Prevenindo o comportamento padrão';
    };

    const capturandoTeclas = function() {
      teclas.value += 'Modificadores encadeados com sucesso'
    }

    return {
      msg,
      prevenirComportamentoPadrao,
      executarUmaVez,
      cliques,
      prevenirUmaVez,
      formulario,
      teclas,
      capturandoTeclas
    };
  },
});
</script>

<style scoped>

</style>
