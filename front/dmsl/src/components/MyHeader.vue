<template>
    <div class="headerCont">
      <div>
        <div class="headerBtn">
          <a v-if="onHome" @click="profile">Profile</a>
          <router-link v-else to="/standings">League</router-link>
        </div>
      </div>
      <div>
        <div class="headerBtn">
          <router-link to="/">Logout</router-link>
        </div>
      </div>
    </div>
</template>

<script>
export default {
  name: 'MyHeader',
  data() {
    return {
      id: '',
    }
  },
  props: ['onHome'],
  methods: {
    profile () {
      this.$router.push({ path: `/profile/${this.id}`})
    }
  },
  mounted () {   
   this.id = localStorage.getItem('id')
  }

}

</script>
<style scoped>
.headerCont {
  width: 90%;
  margin-left: 5%;
  min-width: 300px;
  display: flex;
  justify-content: space-between;
}

.headerBtn {
  border-radius: 10px;
  padding: 10px;
  border: 2px solid white;
   width:80px;
  text-align: center;
  background: #8C55AA;
  box-shadow: 2px 2px rgba(255,255,255,0.4);
}

.headerBtn a{
  color: white;
  text-decoration-line: none;
}


</style>