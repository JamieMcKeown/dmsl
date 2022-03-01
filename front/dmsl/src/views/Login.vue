<template>
    <div class="main">
            <p class="sign">Sign In</p>
            <form @submit.prevent  class="form1">
                <div class="regForm">
                    <label>Email</label>
                    <input class="un" type="email" v-model="v$.email.$model">
                </div>
                <div class="regForm">
                    <label>Password</label>
                    <input class="pass" type="password" v-model="v$.password.$model">
                </div>
                <a class="submit" @click="signIn" @class="{ active:isActive }">Sign in</a>
                <p v-for="error of v$.$errors" :key="error.$uid">
                    {{ error.$message }}
                </p>
                <p v-if="serverErrMsg">Email or Password does not match</p>
                <p class="forgot"><a href="#">Forgot Password?</a></p>
                <p class="register"><router-link to="/register">Registration</router-link></p>
            </form>       
    </div> 
</template>

<script>
import axios from 'axios';
import useVuelidate from '@vuelidate/core'
import { required, email } from '@vuelidate/validators'

export default {
  name: 'Login',
  setup () {
    return { v$: useVuelidate() }
  },
  data () {
      return {
        email: "",
        password: "",
        isActive: false,
        serverErrMsg: ""
      }
  },
  validations () {
    return {
        email: { required }, 
        password: { required },       
    }
  },
  methods: {
      signIn: function() {  
        const result =  this.v$.$validate();  
        axios.post('http://localhost:8000/api/login', {
            email:  this.email,
            password: this.password
        }).then(response => ([          
            response.data.data === 'fail' ? this.serverErrMsg = true : this.$router.push({ path: `/profile/${response.data.id}`})    
        ]))
      },
       getKeyboard: function(event) {
         if (event.key == "Enter"){
             this.signIn()
         }
        }
  },
  mounted () {
     window.addEventListener("keydown", this.getKeyboard);
    }
}
</script>

<style scoped>

    .main {
        background-color: #FFFFFF;
        min-width: 300px;
        max-width: 650px;
        height:90% !important;
        margin: auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.34);
    }
    
    .sign {
        padding-top: 40px;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 23px;
    }
    
    .un {
        width: 60%;
        margin-bottom: 27px;
        color: rgb(38, 50, 56);
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 1px;
        background: rgba(136, 126, 126, 0.04);
        padding: 10px 20px;
        border: none;
        border-radius: 20px;
        outline: none;
        box-sizing: border-box;
        border: 2px solid rgba(0, 0, 0, 0.02);
        text-align: center;
        font-family: 'Ubuntu', sans-serif;
    }

       label {
        font-size: 16px;
        padding-top: 5px;
        width: 10%;
        color: #8C55AA;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        text-align: left;
    }

     .regForm {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin: 0 12%;
    }
    
    form.form1 {
        display: flex;
        flex-direction: column;
        align-content: space-around;
    }
    
    .pass {
        width: 60%;
        margin-left: 12%;
        color: rgb(38, 50, 56);
        font-weight: 700;
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
        width: 50%;
        margin-left: 25%;
        font-family: 'Ubuntu', sans-serif;
        padding: 10px 0;
        font-size: 13px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
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