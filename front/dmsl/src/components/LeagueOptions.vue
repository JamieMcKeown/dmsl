<template>
    <div class="headerCont">
        <div class="topRow">
            <div class="headerBtn">
                <router-link to="/scores">Scores</router-link>
            </div>
            <div class="headerBtn">
                <router-link to="/teams">Teams</router-link>
            </div>
        </div>
        <div class="bottomRow">
            <div class="headerBtn">
                <router-link to="/schedule">Schedule</router-link>
            </div>
            <div class="headerBtn">
                <router-link to="/standings">Standings</router-link>
            </div>
        </div>

    </div>
   
</template>

<script>
export default {
  name: 'LeagueOptions',
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
  width:80px;
  padding: 10px;
  text-align: center;
  border: 2px solid white;
  background: #8C55AA;
  box-shadow: 2px 2px rgba(255,255,255,0.4);
}

.headerBtn a{
  color: white;
  text-decoration-line: none;
}


</style>
