<template>
  <myHeader></myHeader>
  <myMain>
    <my-registration></my-registration>
  </myMain>
  <myFooter></myFooter>
  
 

</template>

<script>


import MyHeader from './components/MyHeader.vue';
import MyMain from './components/MyMain.vue';
import MyFooter from './components/MyFooter.vue';
import MyRegistration from './components/MyRegistration.vue';



export default {
  name: 'App',
  components: {
    MyHeader,
    MyMain,
    MyFooter,
    MyRegistration,
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
