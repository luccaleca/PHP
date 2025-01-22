<template>
  <div>
    <h1>Diretiva V-Text</h1>

    <div v-html="elementosHTML"></div> <!--"Funciona"-->
    <div v-text="elementosHTML"></div> <!--"Não funciona"-->
  </div>
</template>


<script>
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name: 'Diretiva V-Text',
  setup() {


    const elementosHTML = ref('<p><b>Site:</p><a href="https://www.linkedin.com/feed/">Linkedin')

return {

    elementosHTML


    }

  },
})
</script>

<style scoped>

</style>

