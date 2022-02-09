<template>
    <div>
        <my-header  :onHome="onHome" />
        <league-options />
        <h1>index</h1>
        <index-coach-tools />
        <my-footer />
    </div>   
</template>

<script>


import MyHeader from '../components/MyHeader.vue'
import MyFooter from '../components/MyFooter.vue'
import LeagueOptions from '../components/LeagueOptions.vue'
import IndexCoachTools from '../components/IndexCoachTools.vue'



export default {
  name: 'index',
  components: {
      MyHeader,
      MyFooter,
      LeagueOptions,
      IndexCoachTools,
  },
 
  data () {
      return {     
       onHome: false,
      }
  },
}

</script>

<style scoped>
   
 
 
</style>