<template>
    <div>
      <h1>Diretiva V-For</h1>
    </div>
</template>




<script>
import { defineComponent } from 'vue'

export default defineComponent({
  name:"DiretivaVFor",
  setup() {

    const cursos = ['Laravel', 'Web Completo', 'Banco de Dados', 'Solid', 'Angular']



    return {
      cursos,
    }

  },
})
</script>


<style scoped>

</style>

