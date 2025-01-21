<template>
  <div>
    <h1>{{title}}</h1>
    <p>Esse componente é reutilizavel</p>
    <p>{{message}}</p>
    <p>message</p>

  </div>
</template>

<script>
export default {
  name: 'TerceiroComponente',
  data() {
    return {
      title: 'Terceiro componente feito em Vue',
      message: 'Testando a tecnica de double mustache no vue'
    }
  }


}


</script>

<style scoped>
h1 {
  color: #ddc331;

}

</style>
