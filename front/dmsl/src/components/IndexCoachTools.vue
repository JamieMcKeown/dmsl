<template> 
    <div class="headerCont">
        <div class="headerBtn">
            <router-link to="/index">Index</router-link>
        </div>
        <div class="headerBtn">
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
