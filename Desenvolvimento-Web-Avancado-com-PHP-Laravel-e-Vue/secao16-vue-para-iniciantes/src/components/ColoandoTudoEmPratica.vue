<template>
      <div>
        <h1>Colocando tudo em prática</h1>
  <div class="borda div-principal" :class="cor"> Cor: {{cor}}
    <br>
    Posição X do mouse: {{ posicaoX }}
    Posição Y do mouse: {{ posicaoY }}

  </div>
      <hr>
    <div @click="mudarCor('verde')" class="borda div-comum" ></div>
    <div class="borda div-comum" @mouseover="mudarCor('azul')"  @mouseout="mudarCor('vermelho')"></div>
    <div class="borda div-comum" @mousemove="coordenadas"></div>
    </div>
</template>




<script>
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name:'ColocandoTudoEmPratica',
  setup() {

    const mudarCor = function(novaCor) {
      cor.value = novaCor

    }

    const cor = ref('branco')

    const coordenadas = function(e) {
      console.log(e.clientX, e.clientY)
      this.posicaoX = e.clientX
      this.posicaoY = e.clientY

    }

    const posicaoX =ref(0)
    const posicaoY = ref(0);



    return {
      mudarCor,
      cor,
      coordenadas,
      posicaoX,
      posicaoY
    }

  },
})
</script>


<style scoped>

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

.branco {
  background-color: white;
}

.verde {
  background-color: green;
}

.azul {
  background-color: blue;
}

.vermelho {
  background-color: red;
}

</style>


