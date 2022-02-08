<template> 
    <div class="bottomRow">
        <div class="left">
            <router-link to="/index">Index</router-link>
        </div>
        <div class="right">
            <router-link to="/coach">Coach Tool</router-link>
        </div>
    </div> 
</template>

<script>
export default {
  name: 'IndexCoachTools',
}
</script>
<style scoped>
.bottomRow {
    display: flex;
    width: 90%;
    margin-left: 5%;
    justify-content: space-between;
}

</style>
