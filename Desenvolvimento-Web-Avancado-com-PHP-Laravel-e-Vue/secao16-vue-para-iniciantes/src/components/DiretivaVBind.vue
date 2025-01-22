<template>
  <div>
    <h1 v-bind:class="[cor, importante]">Entendendo a diretiva v-bind</h1>
    <!-- v-bind:href permanece correto mesmo sem escrever v-bind -->
    <a :href="github">github</a> <br>
    <input type="text"  v-bind:placeholder="instrucaoDePreenchimento" v-bind:value="valor"/>
    <input type="checkbox" v-bind:checked="check"/><br>
    <input :value="mensagem" :class="[estiloInput, (1 == 2) ? 'verde' : 'azul']" />
  </div>
</template>

<script>
import { defineComponent } from 'vue';

export default defineComponent({
  name: 'DiretivaVBind',
  setup() {
    // Definindo o valor inicial da variável site
    const github =  'https://github.com/';
    const instrucaoDePreenchimento = 'Placeholder - Diretiva v-bind';
    const valor = instrucaoDePreenchimento.length;
    const cor = 'verde';
    const check = true; //marcar ou desmarcar
    const importante = 'negrito';
    const mensagem = 2 + 2;
    const estiloInput = 'espaco';
    const corInput = 'azul';



    return {
      github,
      instrucaoDePreenchimento,
      valor,
      cor,
      check,
      importante,
      mensagem,
      estiloInput,
      corInput
    };
  },
});
</script >

<style scoped>

.verde {
  color: green
}

.azul {
  background-color: rgb(135, 221, 243);
}

.negrito {
  font-weight: 1.5;
}

.espaco {
  margin-top: 10px;
}
</style>
