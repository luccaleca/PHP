<template>
  <div>
    <h1>{{title}}</h1>
    <p>Esse componente é reutilizavel</p>
  </div>
</template>

<script>
export default {
  name: 'SegundoComponente',
  data() {
    return {
      title: 'Segundo componente feito em Vue'
    }
  }
}
</script>

<style scoped>
h1 {
  color: #541572;

}

</style>
