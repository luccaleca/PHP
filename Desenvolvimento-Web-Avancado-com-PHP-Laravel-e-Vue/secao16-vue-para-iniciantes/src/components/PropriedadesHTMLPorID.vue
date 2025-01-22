<template>
  <div>
    <h1>PropriedadesHTMLPorID</h1>
    <input type="text" ref="inputTexto">
    <button @click="selecionarElementoFilho()">Botão</button>
    <br>
    <select  ref="opcoes">
      <option value="A">Opção 1</option>
      <option value="B">Opção 2</option>
      <option value="C">Opção 3</option>
    </select>
    <br>
    <p ref="paragrafo" style="color: green;">Parágrafo</p>
    <button @click="selecionarElementoFilho()">Botão</button>
    <div ref="bloco">Conteudo interno da div</div>
  </div>
</template>



<script>
import { defineComponent, ref, } from 'vue'

export default defineComponent({
  name: 'PropriedadesHTMLPorID',
  setup() {

    const inputTexto = ref(null);
    const opcoes = ref(null)
    const paragrafo = ref(null);
    const bloco = ref(null);

    const selecionarElementoFilho = function() {
        console.log(opcoes.value.value) //o primeiro value puxa o select, como queremos opcoes que é filho é value do value
        console.log(paragrafo.value.style.color)
        console.log(bloco.value.innerHTML)
    }


    return {
      selecionarElementoFilho,
      inputTexto,
      opcoes,
      paragrafo,
      bloco

    }
  },
})
</script>

