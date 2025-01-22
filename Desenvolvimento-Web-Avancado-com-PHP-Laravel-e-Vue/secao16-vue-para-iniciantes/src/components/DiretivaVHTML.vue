<template>
  <div>
    <h1>Diretiva V-HTML</h1>
    <div v-html="elementosHTML"></div>
  </div>
</template>




<script >
import { defineComponent, ref } from 'vue'

export default defineComponent({
  name: 'Diretiva V-HTML',
  setup() {


    const elementosHTML = ref('<p><b>Site:</p><a href="https://www.linkedin.com/feed/">Linkedin')

    return {

        elementosHTML
    }

  },
})
</script>

