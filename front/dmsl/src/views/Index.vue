<template>
    <div>
        <my-header  :onHome="onHome" />
        <league-options />
        <div class="cont">
            <div class="teams">
                <div class="teamName">
                    <h5 class="search">Team Name</h5>
                    <p>Swamp Donkeys</p>
                    <p>Orioles</p>
                    <p>Shockers</p>
                    <p>Greyhounds</p>
                    <p>Goldsluggers</p>
                    <p>Les Veterans</p>
                </div>
                <div class="teamAbbrev">
                    <h5 class="search">Abbreviation</h5>
                    <p>SD</p>
                    <p>OR</p>
                    <p>SKR</p>
                    <p>GH</p>
                    <p>GS</p>
                    <p>VET</p>
                </div>
            </div>
            <div class="fields">
                <div class="fieldName">
                    <h5 class="search">Field Name</h5>
                    <p>Shields</p>
                    <p>Ewenson</p>
                    <p>Holt</p>
                </div>
                <div class="fieldAbbrev">
                    <h5 class="search">Abbreviation</h5>
                    <p>Shd</p>
                    <p>Ewe</p>
                    <p>Hlt</p>
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
       onHome: true,
      }
  },
}

</script>

<style scoped>

    .cont {
        display: flex;
        flex-direction: column;
        margin: 20px 0px;
    }

    p {
        margin: 5px 0px;
        font-size: 16px;
    }

    .teams, .fields {
            display: flex;
            margin: auto;
            justify-content: space-between;
            padding: 10px;   
            width: 80%;
    }

    .teamName, .teamAbbrev, .fieldName, .fieldAbbrev {
        width: 100%;
    }

  
    .search {
    margin: auto;
    text-align: center;
    border: 3px solid #8C55AA;
    padding: 5px;
    border-radius: 15px;
    }

   .teamAbbrev, .fieldAbbrev {
       margin-left: 10px;
   }
 
 
</style>