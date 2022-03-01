<template>
  <div id="nav" hidden>
    <router-link to="/">Login</router-link> |
    <router-link to="/register">Register</router-link>
  </div>
  <router-view/>
  
</template>

<script>
export default {
  name: 'App',
}
</script>

<style>
html {
  background: rgba(255,255,245,0.6);
}


#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 20px;
  
}

#app .main {
      background-color: #FFFFFF;
    min-width: 300px;
    max-width: 650px;
    height: 650px;
    padding: 5% 0;
    border-radius: 1.5em;
    box-shadow: 0px 11px 35px 2px rgb(0 0 0 / 34%);
}

.bodyCont {
      width: 90%;
      margin-left: 5%;
      margin: 20px 0px;
  }


.clicked {
    border-radius: 10px;
  padding: 10px;
  border: 2px solid #8C55AA;
   width:80px;
  text-align: center;
  background: white;
  box-shadow: 2px 2px rgba(255,255,255,0.4);
}


</style>
