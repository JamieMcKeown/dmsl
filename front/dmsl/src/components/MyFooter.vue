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
  border-radius: 25%;
  border: 2px solid white;
  background: #8C55AA;
}

</style>
