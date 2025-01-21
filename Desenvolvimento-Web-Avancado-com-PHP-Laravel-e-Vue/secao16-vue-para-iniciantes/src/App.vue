<template>
  <div>
    <h1>Esse é meu componente Central</h1>
    <SegundoComponente />
    <TerceiroComponente />
    <TestandoSetup />
    <TestandoMetodo />
    <diretivaVBind />
    <diretivaVOn />
    <ColocandoTudoEmPratica />

  </div>
</template>

<script>
import SegundoComponente from './components/SegundoComponente.vue'
import TerceiroComponente from './components/TerceiroComponente.vue'
import TestandoSetup from './components/TestandoSetup.vue'
import TestandoMetodo from './components/TestandoMetodo.vue'
import DiretivaVBind from './components/DiretivaVBind.vue'
import DiretivaVOn from './components/DiretivaVOn.vue'
import ColocandoTudoEmPratica from './components/ColoandoTudoEmPratica.vue'


export default {
  components: { SegundoComponente, TerceiroComponente, TestandoSetup, TestandoMetodo, DiretivaVBind, DiretivaVOn, ColocandoTudoEmPratica },
  name: 'App'
}
</script>

<style >
h1 {
  color: #42b983;

}

</style>
