<template>
    <div>
        <my-header />
        <league-options />
        <h1>standings</h1>
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
  name: 'standings',
  components: {
      MyHeader,
      MyFooter,
      LeagueOptions,
      IndexCoachTools,
  },
 
  data () {
      return {     
       
      }
  },
}

</script>

<style scoped>
   
 
 
</style>