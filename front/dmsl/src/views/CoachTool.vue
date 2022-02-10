<template>
    <div>
        <my-header />
        <league-options />
        <div class="bodyCont">
            <div class="top">
               <form @submit.prevent  class="form1">
                <div class="regForm">
                    <label>Position</label>
                    <select class="un" v-model="position">
                        <option value="pitcher">Pitcher</option>
                        <option value="catcher">Catcher</option>
                        <option value="1">1st Base</option>
                        <option value="2">2nd Base</option>
                        <option value="3">3rd Base</option>
                        <option value="SS">Short Stop</option>
                        <option value="OF">Outfield</option>
                        <option value="Rover">Rover</option>
                        <option value="Any">Any</option>
                    </select>
                </div>
                <div class="regForm">
                    <label>Day</label>
                    <select class="un"  v-model="dayOfWeek">
                        <option value="Monday">Monday</option>
                        <option value="Tuesday">Tuesday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                        <option value="Friday">Friday</option>
                        <option value="Saturday">Saturday</option>
                        <option value="Sunday">Sunday</option>
                    </select>
                </div>
                <div class="regForm">
                    <label>Time</label>
                    <select class="un" v-model="time">
                        <option value="7">7pm</option>
                        <option value="9">9pm</option>
                    </select>
                </div>
                <div class="regForm">
                   <label> Division</label>
                    <select class="un" v-model="division">
                        <option value="Shields">Shields</option>
                        <option value="MacDonald">MacDonald</option>
                    </select>
                </div>
                <a class="search" @click="search">Search</a>
            </form>       
            </div>
            <div class="bottom">
                <ul>
                    <li v-for="player in players" :key="player">{{ player.first_name }}</li>
                </ul>
            
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
  name: 'coachtool',
  components: {
      MyHeader,
      MyFooter,
      LeagueOptions,
      IndexCoachTools,
  },
 
  data () {
      return {     
       position: "",
       dayOfWeek: "",
       division: "",
       time: "",
       players: []
      }
  },
  methods: {
      search: function() {  
        axios.post('http://localhost:8000/api/register/search', {
            position:  this.position,
            day: this.dayOfWeek,
            division: this.division,
            time: this.time
        }).then(response => ([          
           this.players = response.data   
        ]))
      },
  }
}

</script>

<style scoped>
   
 
 
</style>