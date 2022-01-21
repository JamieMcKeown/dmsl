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
                    <p class="sign">Register</p>
                    <form @submit.prevent  class="form1" method="post">
                        <input class="un" type="text" v-model="input.email" placeholder="Email">
                        <input class="un" type="password" v-model="input.password" placeholder="Password">
                        <input class="un" type="text" v-model="input.first_name" placeholder="First Name">
                        <input class="un" type="text" v-model="input.last_name" placeholder="Last Name">
                        <input class="un" type="number" v-model="input.phone" placeholder="Phone">
                        <input class="un" type="text" v-model="input.contact_preference" placeholder="Contact Preference">
                        <input class="un" type="text" v-model="input.available_days" placeholder="Available Days">
                        <input class="un" type="text" v-model="input.available_time" placeholder="Available Time">
                        <input class="un" type="text" v-model="input.available_position" placeholder="Available Position">
                        <input class="un" type="text" v-model="input.available_team_id" placeholder="Team I.D.">
                        <a class="submit" @click="register">Sign in</a>
                    </form>       
            </div>
        </body>
    </html>
</template>

<script>

import axios from 'axios';
export default {
  name: 'MyRegistration',
  
  props: {
    
  },
  data () {
      return {
        input: {
            first_name: "",		
            last_name: "",		
            email: "", 	
            password: "",		
            phone: "",		
            contact_preference: "",	
            available_days: "",		
            available_time: "",		
            available_division: "",		
            available_position: "",	
            team_id: "", 	
            is_online: ""	
            },
        
      }
  },
  methods: {
      register: function() {  

             axios
    .post('http://localhost:8000/api/register', [{
        first_name: this.input.first_name,		
        last_name: this.input.last_name,		
        email: this.input.email, 	
        password: this.input.password,		
        phone: this.input.phone,		
        contact_preference: this.input.contact_preference,	
        available_days: this.input.available_days,		
        available_time: this.input.available_time,		
        available_division: this.input.available_division,		
        available_position: this.input.available_position,	
        team_id: this.input.available_team_id, 	
        is_online: true	
    }]).then(response => ([
        this.test = response.data
    ]))

    this.input.first_name =  ""		
    this.input.last_name = ""		
    this.input.email = ""	
    this.input.password = ""		
    this.input.phone = ""		
    this.input.contact_preference = ""
    this.input.available_days = ""		
    this.input.available_time = ""		
    this.input.available_division = ""		
    this.input.available_position = ""
    this.input.available_team_id = "" 	
            

    },
      

  },
   mounted () {
   
     
  }
}
</script>

<style scoped>
 
    body {
        font-family: 'Ubuntu', sans-serif;
    }
    
    .main {
        background-color: #FFFFFF;
        min-width: 300px;
        max-width: 650px;
        height:90%;
        margin: 7em auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.34);
    }
    
    .sign {
        padding-top: 20px;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
        width: 76%;
        margin-left: 12%;
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
    
    a {
        text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #8C55AA;
        text-decoration: none
    }
    
    @media (max-width: 600px) {
        .main {
            border-radius: 0px;
        }
    }   
</style>