<template>
    <html>
        <head>
            <link rel="stylesheet" href="css/style.css">
            <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
            <title>Sign in</title>
        </head>

        <body>
            <div class="main">
                   <my-header></my-header>
                   <my-footer></my-footer>
            </div>
        </body>
    </html>
</template>

<script>

import axios from 'axios';
import MyHeader from '../components/MyHeader.vue'
import MyFooter from '../components/MyFooter.vue'


export default {
  name: 'Main',
  components: {
      MyHeader,
      MyFooter
  },
 
  data () {
      return {       
       
      }
  },
  methods: {
      
  },
   mounted () {
   
     
  }
}
</script>

<style scoped>
   
 
  /* color: #8C55AA;  */
</style>