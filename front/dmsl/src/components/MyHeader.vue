<template>
    <div class="headerCont">
      <div>
        <div class="headerBtn">
          <router-link v-if="onHome" to="/profile">Profile</router-link>
          <router-link v-else to="/standings">League Home</router-link>
        </div>
      </div>
      <div>
        <div class="headerBtn">
          <router-link to="/logout">Logout</router-link>
        </div>
      </div>
    </div>
</template>

<script>
export default {
  name: 'MyHeader',
  props: ['onHome'],
  computed: {

  },
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
  border-radius: 25%;
  border: 2px solid white;
  background: #8C55AA;
}

</style>