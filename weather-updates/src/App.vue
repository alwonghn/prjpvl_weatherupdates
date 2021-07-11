<template>
  <div id="app">
    <WeatherUpdates msg="Injected message!!"/>
  </div>
</template>

<script>
import WeatherUpdates from './components/WeatherUpdates.vue';

export default {
  name: 'App',
  components: {
    WeatherUpdates
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
