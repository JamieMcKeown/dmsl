<template>
    <div class="main">
        <my-header :onHome="onHome" :id="id"/>
        <form @submit.prevent>
            <div class="regForm">
                <label>Contact Preference</label>
                <select class="un"  v-model="v$.contact_preference.$model">
                    <option value="phone">Phone</option>
                    <option value="email">Email</option>
                </select> 
            </div>
            <div class="regForm">
                <label>Available Days</label>
                <select class="un"  v-model="v$.available_days.$model" multiple>
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
                <label>Available Time</label>
                <select class="un" v-model="v$.available_times.$model">
                    <option value="7">7pm</option>
                    <option value="9">9pm</option>
                    <option value="both">Both</option>
                </select>
            </div>
            <div class="regForm">
                <label>Available Division</label>
                <select class="un" v-model="v$.available_division.$model">
                    <option value="Shields">Shields</option>
                    <option value="MacDonald">MacDonald</option>
                    <option value="both">Both</option>
                </select>
            </div>
            <div class="regForm">
                <label>Available Position</label>
                <select class="un" v-model="v$.available_position.$model" multiple>
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
            <div class="status">
                <a class="update" @click="update">Update</a>
                <a v-if="success">Success! Your profile was updated</a>
                <p v-for="error of v$.$errors" :key="error.$uid">
                    {{ error.$message }}
                </p>
            </div>
        </form>
        <index-coach-tools />
        <my-footer></my-footer>
    </div>
</template>

<script>

import axios from 'axios';

import MyHeader from '../components/MyHeader.vue'
import MyFooter from '../components/MyFooter.vue'
import IndexCoachTools from '../components/IndexCoachTools.vue'

import useVuelidate from '@vuelidate/core'
import { required } from '@vuelidate/validators'






export default {
  name: 'Profile',
  setup () {
    return { v$: useVuelidate() };
     
  },
  components: {
      MyHeader,
      MyFooter,
      IndexCoachTools,
  },
 
  data () {
      return {     
        onHome: false, 
        success: false, 
        contact_preference: "",
        available_days: "",
        available_times: "",
        available_position: "",
        available_division: "",
        id: this.$route.params.id,
      }
  },

  validations () {
    return {  
        contact_preference: { required }, 
        available_days: { required }, 
        available_times: { required }, 
        available_position: { required }, 
        available_division: { required }, 
    }
  },
  methods: {
      
       update () {
           console.log(localStorage.getItem('id'))
           if (this.password == this.passwordConf) {
                axios.put('http://localhost:8000/api/register', {
                contact_preference: this.contact_preference,		
                available_days: this.available_days,		
                available_times: this.available_times, 	
                available_position: this.available_position,		
                available_division: this.available_division,
                id: this.$route.params.id
                }).then(response => ([
                        this.contact_preference = response.data.result.contact_preference,
                        this.available_days = response.data.result.available_days,
                        this.available_times = response.data.result.available_times,
                        this.available_position = response.data.result.available_position,
                        this.available_division = response.data.result.available_division,
                        this.success = true,
                        
                ]))
           } else {
               
           }
           
        }
  },

  mounted () {   
    localStorage.setItem('id', this.$route.params.id ),    
    axios.get('http://localhost:8000/api/register/' + this.$route.params.id)
            .then(response => ([
            this.contact_preference = response.data.result.contact_preference,
            this.available_days = response.data.result.available_days,
            this.available_times = response.data.result.available_times,
            this.available_position = response.data.result.available_position,
            this.available_division = response.data.result.available_division,  
    ]))
  }
}

</script>

<style scoped>
      
    .main {
        background-color: #FFFFFF;
        min-width: 300px;
        max-width: 650px;
        height:90%;
        margin:  auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.34);
    }

    form {
        margin: 10px 0;
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

    .status {
        display: flex;
        flex-direction: column;
        margin: 10px;
        padding: 10px;
    }

    .status a {
        padding: 5px 0;
    }
 
 
</style>