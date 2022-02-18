<template>
    <div>
        <my-header  :onHome="onHome" />
        <league-options />
        <div class="cont">
            <div class="teams">
                <div class="teamName">
                    <p>Swamp Donkeys</p>
                    <p>Orioles</p>
                    <p>Shockers</p>
                    <p>Greyhounds</p>
                    <p>Goldsluggers</p>
                    <p>Les Veterans</p>
                </div>
                <div class="teamAbbrev">
                    
                </div>
            </div>
            <div class="fields">
                <div class="fieldName">
                    
                </div>
                <div class="fieldAbbrev">

                </div>
            </div>
        </div>
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