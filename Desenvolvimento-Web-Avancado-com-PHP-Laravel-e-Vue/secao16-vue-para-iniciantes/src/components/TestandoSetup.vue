<template>
  <div>
    <h2>{{ titulo }}</h2>
    <p>Valor total:{{ numero }}</p>
    <p>Esta ativo:{{ boleano }}</p>
    <p>Ficar grande:{{ array[3] }}</p>
    <p>Uma fruta:{{ maisUmArray[1] }}</p>
  </div>
</template>

<script>
import { defineComponent, ref, reactive } from 'vue';

export default defineComponent({
  name: 'TestandoSetup',
  setup() {
    // Usando ref para valores simples
    const titulo = ref('Teste de Valores:');  // string
    const numero = ref(150.47);  // número
    const boleano = ref(true);  // booleano

    // Usando reactive para arrays
    const array = reactive([
      'batata',
      'frango',
      'arroz',
      'whey protein'
    ]);

    const maisUmArray = reactive([
      'maça',
      'pera',
      'melancia'
    ]);

    // Retorne os valores do setup para usá-los na template
    return {
      titulo,
      numero,
      boleano,
      array,
      maisUmArray
    };
  },
});
</script>

<style scoped>

</style>
