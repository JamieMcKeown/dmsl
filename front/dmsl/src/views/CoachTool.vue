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
            <p v-if="allFields">Please select an option from all fields</p>       
            </div>
            <div class="bottom">
                <ul>
                    <li v-for="player in players" :key="player">{{ player.team_id }} - {{ player.first_name }} {{ player.last_name }} - {{ player.phone}}</li>
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
       players: [],
       allFields: false,
      }
  },
  methods: {
      search: function() {  
        if (this.position == '' || this.dayOfWeek == '' || this.division == '' || this.time == '' ){
            this.allFields = true
        } else {
            axios.post('http://localhost:8000/api/register/search', {
            position:  this.position,
            day: this.dayOfWeek,
            division: this.division,
            time: this.time
            }).then(response => ([          
            response.data.result.forEach(player => {
                if (player.contact_preference == 'email'){
                   
                    player.phone = phone.email
                }
            }),
            this.players = response.data.result,
            console.log(this.players),
            this.allFields = false,
            ]))
        }
      },
  },
  computed: {
      

  }
}

</script>



<style scoped>

    li {
        list-style-type: none;
        color: #8C55AA;
        font-size: 23px;
    }
    
    .main {
        background-color: #FFFFFF;
        min-width: 300px;
        max-width: 650px;
        height:90%;
        margin:  auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.34);
    }

    .regForm {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin: 0 12%;
    }
    
    .sign {
        padding-top: 20px;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
        width: 50%;
        margin-bottom: 10px;
        color: rgb(38, 50, 56);
        font-weight: 300;
        font-size: 14px;
        letter-spacing: 1px;
        background: rgba(136, 126, 126, 0.04);
        padding: 10px 10px;
        border: none;
        border-radius: 20px;
        outline: none;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.02);
        text-align: center;
        font-family: 'Ubuntu', sans-serif;
    }
    
    form.form1 {
        display: flex;
        flex-direction: column;
        align-content: space-around;
        padding: 20px 0;
    }
    
    .pass {
        width: 76%;
        margin-left: 12%;
        color: rgb(38, 50, 56);
        font-weight: 300;
        font-size: 14px;
        letter-spacing: 1px;
        background: rgba(136, 126, 126, 0.04);
        padding: 10px 20px;
        border-radius: 20px;
        outline: none;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.02);
        text-align: center;
        margin-bottom: 27px;
        font-family: 'Ubuntu', sans-serif;
    }
    
   
    .un:focus, .pass:focus {
        border: 2px solid rgba(0, 0, 0, 0.18) !important;
        
    }
    
    .submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #9C27B0, #E040FB);
        width: 76%;
        margin-left: 12%;
        font-family: 'Ubuntu', sans-serif;
        font-weight: 700;
        padding: 10px 0;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
        margin-bottom: 20px;
    }
    
    .forgot {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #8C55AA;
        padding-top: 15px;  
    }
    .register {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #8C55AA;
        padding-top: 15px;  
    }

    label {
        font-size: 16px;
        padding-top: 5px;
        width: 30%;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        text-align: left;
    }
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #8C55AA;
        text-decoration: none
    }

    .search {
        margin: auto;
        text-align: center;
        border: 3px solid #8C55AA;
        padding: 10px;
        border-radius: 15px;

    }
 
 
</style>