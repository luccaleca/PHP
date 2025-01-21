<template>
      <div>
        <h1>Colocando tudo em prática</h1>
  <div class="borda div-principal"> {{cor}} </div>
      <hr>
    <div @click="mudarCor('verde')" class="borda div-comum" ></div>
    <div class="borda div-comum" ></div>
    <div class="borda div-comum" ></div>
    </div>
</template>




<script>
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name:'ColocandoTudoEmPratica',
  setup() {

    const mudarCor = function(c) {
      cor.value = c

    }

    const cor = ref('branco')

    return {
      mudarCor,
      cor
    }

  },
})
</script>


<style>

.borda {
  border: 1px solid black;
}

.div-principal {
  width: 200px;
  height: 200px;
  margin-top: 20px;
}

.div-comum {
  width: 50px;
  height: 50px;
  display: inline-block;
  margin: 5px
}

</style>


