<template>
    <div class="optContainer">
        <div class="topRow">
            <div class="left">
                <router-link to="/scores">Scores</router-link>
            </div>
            <div class="right">
                <router-link to="/teams">Teams</router-link>
            </div>
        </div>
        <div class="bottomRow">
            <div class="left">
                <router-link to="/schedule">Schedule</router-link>
            </div>
            <div class="right">
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
.optContainer {
    display: flex;
    flex-direction: column;
    border: 1px solid white;
    width: 90%;
    margin-left: 5%;
}
.topRow {
    display: flex;  
    justify-content: space-between;
    width: 90%;
    margin-left: 5%

}
.bottomRow {
    display:flex;
    justify-content: space-between;
    width: 90%;
    margin-left: 5%
}
.left {
    width: 50%
}
.right {
    width: 50%
}

</style>
