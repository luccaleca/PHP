<template>
  <div class="espacamento-padrao">
    <h1>Esse é meu componente Central</h1>
    <div class="componente-container">
      <SegundoComponente />
    </div>
    <div class="componente-container">
      <TerceiroComponente />
    </div>
    <div class="componente-container">
      <TestandoSetup />
    </div>
    <div class="componente-container">
      <TestandoMetodo />
    </div>
    <div class="componente-container">
      <DiretivaVBind />
    </div>
    <div class="componente-container">
      <DiretivaVOn />
    </div>
    <div class="componente-container">
      <ColocandoTudoEmPratica />
    </div>
    <div class="componente-container">
      <ModificadoresDiretivaVOn />
    </div>
    <div class="componente-container">
      <PropriedadesHTMLPorID />
    </div>
    <div class="componente-container">
      <DiretivaVIF />
    </div>
    <div class="componente-container">
      <DiretivaVShow />
    </div>
    <div class="componente-container">
      <DiretivaVHTML />
    </div>
    <div class="componente-container">
      <DiretivaVText />
    </div>
    <div class="componente-container">
      <DiretivaVOnce />
    </div>
    <div class="componente-container">
      <DiretivaVFor />
    </div>
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
import ModificadoresDiretivaVOn from './components/ModificadoresDiretivaVOn.vue'
import PropriedadesHTMLPorID from './components/PropriedadesHTMLPorID.vue'
import DiretivaVIF from './components/DiretivaVIF.vue'
import DiretivaVShow from './components/DiretivaVShow.vue'
import DiretivaVHTML from './components/DiretivaVHTML.vue'
import DiretivaVText from './components/DiretivaVText.vue'
import DiretivaVOnce from './components/DiretivaVOnce.vue'
import DiretivaVFor from './components/DiretivaVFor.vue'



export default {
  components: { SegundoComponente, TerceiroComponente, TestandoSetup, TestandoMetodo,
     DiretivaVBind, DiretivaVOn, ColocandoTudoEmPratica, ModificadoresDiretivaVOn,
      PropriedadesHTMLPorID, DiretivaVIF, DiretivaVShow, DiretivaVHTML, DiretivaVText, DiretivaVOnce, DiretivaVFor },
  name: 'App'
}
</script>

<style >

  .espacamento-padrao {
    padding-bottom: 40px;
  }

  .componente-container {
      border: 1px solid black;
      margin-bottom: 20px;
      padding: 20px;
  }

</style>

