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
                       <div class="regForm">
                                <label>Contact Preference</label>
                                <select class="un"  v-model="contact_preference">
                                    <option value="phone">Phone</option>
                                    <option value="email">Email</option>
                                </select> 
                        </div>
                        <div class="regForm">
                                <label>Available Days</label>
                                <select class="un"  v-model="available_days" multiple>
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
                                <select class="un" v-model="available_time">
                                    <option value="7">7pm</option>
                                    <option value="9">9pm</option>
                                    <option value="both">Both</option>
                                </select>
                        </div>
                        <div class="regForm">
                                <label>Available Division</label>
                                <select class="un" v-model="available_division">
                                    <option value="Shields">Shields</option>
                                    <option value="MacDonald">MacDonald</option>
                                    <option value="both">Both</option>
                                </select>
                        </div>
                        <div class="regForm">
                                <label>Available Position</label>
                                <select class="un" v-model="available_position" multiple>
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