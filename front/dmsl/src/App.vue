<template>
  <my-header></my-header>
  <myMain></myMain>
  <myFooter></myFooter>
  
  <img alt="Vue logo" src="./assets/logo.png">
  <Landing msg="Welcome to Your Vue.js App"/>
</template>

<script>
import Landing from './components/Landing.vue';
import MyHeader from './components/MyHeader.vue'
//import Landing from './components/Landing.vue'
//import Landing from './components/Landing.vue'

export default {
  name: 'App',
  components: {
    Landing,
    MyHeader,
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
