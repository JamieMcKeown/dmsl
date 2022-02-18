<template>
    <div class="headerCont">
      <div>
        <div class="headerBtn">
          <a href="https://www.dmsa.ca/fr/stats/horaire.html?season=3020&subSeason=3021&category=2600" target="_blank">DMSA home</a>
        </div>
      </div>
      <div>
        <div class="headerBtn">
          <a href="https://www.facebook.com/dmsasoftball" target="_blank">DMSA on facebook</a>
        </div>
      </div>
    </div>
</template>

<script>
export default {
  name: 'MyFooter',
  props: {
    
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
