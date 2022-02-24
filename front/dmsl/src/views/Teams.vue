<template>
    <div>
        <my-header :onHome="onHome"/>
        <league-options />
        <div class="bodyCont">
            <div class="shields">
                <div class="teamsHeader">
                    <div class="teamName">
                        <h4>Team Name</h4>
                    </div>
                    <div class="teamAbbrev">
                        <h4>Abbreviation</h4>
                    </div>
                </div>
                <div class="teamsBody">
                    <div class="teamName">
                        
                    </div>
                    <div class="teamAbbrev">

                    </div>
                </div>

            </div>
        </div>
        <index-coach-tools />
        <my-footer />
    </div>   
</template>

<script>
import axios from 'axios';

import MyHeader from '../components/MyHeader.vue'
import MyFooter from '../components/MyFooter.vue'
import LeagueOptions from '../components/LeagueOptions.vue'
import IndexCoachTools from '../components/IndexCoachTools.vue'



export default {
  name: 'teams',
  components: {
      MyHeader,
      MyFooter,
      LeagueOptions,
      IndexCoachTools,
  },
 
  data () {
      return {     
       onHome: true,
       teams: [],
      }
  },
  mounted() {
       axios.get('http://localhost:8000/api/login', {
            email:  this.email,
            password: this.password
        }).then(response => ([          
            response.data.data === 'fail' ? this.serverErrMsg = true : this.$router.push({ path: `/profile/${response.data.id}`})    
        ]))
  }
}

</script>

<style scoped>
   
 
 
</style>