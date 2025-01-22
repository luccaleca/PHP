<template>
  <div>
    <h1>Diretiva V-IF</h1>
    <!-- V-if simples -->
    <button @click="toggleSaldo">{{ ocultarSaldo }}</button>
    <p v-if="exibirSaldo">Saldo: R$ {{ saldo }}</p>
    <hr>

    <!-- V-if e v-else -->
    <input type="text" v-model="inputIdade" placeholder="Digite a sua idade">
    <p v-if="inputIdade.trim() !== ''">
      <span v-if="parseInt(inputIdade) < 18">Menor de idade</span>
      <span v-else>Maior de idade</span>
    </p>
    <hr>
     <!-- v-if, v-else-if e v-else -->
     <input type="text" v-model="inputNota" placeholder="Digite sua nota">
    <p v-if="inputNota.trim() !== ''">
      <span v-if="parseFloat(inputNota) >= 7 && parseFloat(inputNota) <= 10">Aluno aprovado</span>
      <span v-else-if="parseFloat(inputNota) >= 5 && parseFloat(inputNota) < 7">Aluno em recuperação</span>
      <span v-else-if="parseFloat(inputNota) >= 0 && parseFloat(inputNota) < 5">Aluno reprovado</span>
    </p>


  </div>
</template>

<script>
import { defineComponent, ref, computed } from 'vue';

export default defineComponent({
  name: 'DiretivaVIF',
  setup() {
    const saldo = 4570.17;
    const exibirSaldo = ref(true);


    const inputIdade = ref('');
    const inputNota = ref('')

    // Função para alternar a exibição do saldo
    const toggleSaldo = () => {
      exibirSaldo.value = !exibirSaldo.value;
    };

    const ocultarSaldo = computed(() => (exibirSaldo.value ? 'Ocultar Saldo' : 'Exibir Saldo'));

    return {
      saldo,
      exibirSaldo,
      toggleSaldo,
      ocultarSaldo,
      inputIdade,
      inputNota
    };
  },
});
</script>

<style scoped>

</style>
