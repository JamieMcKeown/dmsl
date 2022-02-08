<template>
    <div class="main">
        <my-header :onHome="onHome"/>
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
                    <option value="Mon">Monday</option>
                    <option value="Tues">Tuesday</option>
                    <option value="Wed">Wednesday</option>
                    <option value="Thur">Thursday</option>
                    <option value="Fri">Friday</option>
                    <option value="Sat">Saturday</option>
                    <option value="Sun">Sunday</option>
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
            <a class="update" @click="update">Update</a>
            <p v-for="error of v$.$errors" :key="error.$uid">
                {{ error.$message }}
            </p>
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
    return { v$: useVuelidate() }
  },
  components: {
      MyHeader,
      MyFooter,
      IndexCoachTools,
  },
 
  data () {
      return {     
        onHome: false,  
        contact_preference: "",
        available_days: [],
        available_times: [],
        available_position: [],
        available_division: "",
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
           if (this.password == this.passwordConf) {
                axios.put('http://localhost:8000/api/register', {
                contact_preference: this.contact_preference,		
                available_days: this.available_days,		
                available_times: this.available_times, 	
                available_position: this.available_position,		
                available_division: this.available_division,
                id: this.$route.params.id
                }).then(response => ([
                   
                ]))
           } else {
               
           }
           
        }
  },
  mounted () {
        
           
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
   
 
 
</style>