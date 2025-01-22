<template>
  <div>
      <h1>Diretiva V-Show</h1>  <!-- A diferença pro if else e que neles o elemento nao renderizado nao existe na arvore DOM, ja aqui existe-->
      <p @mouseover="exibirTextoAjuda = true" @mouseout="exibirTextoAjuda = false">Exemplo tooltip</p>
      <div v-show="exibirTextoAjuda">
        <h3>Titulo texto ajuda</h3>
        <p>Contendo texto ajuda</p>
      </div>
  </div>
</template>



<script>
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name: 'DiretivaVShow',
  setup() {

    const exibirTextoAjuda = ref(false)


    return {
      exibirTextoAjuda

    }
  },
})
</script>


<style scoped>

</style>

