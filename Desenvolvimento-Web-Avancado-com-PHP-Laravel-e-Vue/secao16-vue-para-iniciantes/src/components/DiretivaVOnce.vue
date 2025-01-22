<template>
  <div>
    <h1>Diretiva V-Once</h1>
    <p v-once>Saldo inicial: {{saldo}}</p>
    <p>Saldo atualizado: {{saldo}}</p>
    <input type="text" v-model="valor" placeholder="Digite o valor a ser creditado ou debitado">
    <button @click="creditar()">Creditar</button>
    <button @click="debitar()">Debitar</button>
  </div>
</template>


<script>
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name:'DiretivaVOnce',
  setup() {

      const saldo = ref(1100)
      const valor = ref('')


      const creditar = function() {
          saldo.value += parseFloat(valor.value)

      }

      const debitar = function() {
          saldo.value -= parseFloat(valor.value)

      }



    return {

      saldo,
      valor,
      creditar,
      debitar

    }


  },
})
</script>


<style scoped>


</style>

