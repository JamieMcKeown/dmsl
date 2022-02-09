<template>
    <div>
        <my-header />
        <league-options />
        <div class="bodyCont">
            <div class="top">
               <form @submit.prevent  class="form1">
                <div class="regForm">
                    <label>Position</label>
                    <input class="un" type="text">
                </div>
                <div class="regForm">
                    <label>Day</label>
                    <input class="pass" type="text">
                </div>
                <div class="regForm">
                    <label>Division</label>
                    <input class="pass" type="text">
                </div>
                <a class="search" @click="search">Search</a>
                <p v-for="error of v$.$errors" :key="error.$uid">
                    {{ error.$message }}
                </p>
                
               
            </form>       
            </div>
            <div class="bottom">

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

import useVuelidate from '@vuelidate/core'
import { required } from '@vuelidate/validators'



export default {
  name: 'coachtool',
  setup () {
    return { v$: useVuelidate() }
  },
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
       division: ""
      }
  },

  validations () {
    return {
       
    }
  },
}

</script>

<style scoped>
   
 
 
</style>